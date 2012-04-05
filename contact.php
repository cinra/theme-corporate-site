<?php
/**
 * Template Name: Contact 
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

the_post();?>

<div class="article">
	<header>
		<h1>コンタクト</h1>
		<p class="description">当社に対するご意見ご感想や、<br />
		お問い合わせは以下のフォームから<br />
		お気軽に送信ください<br />
		<span style="font-weight:400;font-size:12px;">※<span style="background:#F6FF3F">黄色の項目</span>は必須項目です</span></p>
		<hr />
	</header>
	<section>
		<?php the_content()?>
	</section>
</div>

<script type="text/javascript">
$(function($){
  if(jQuery.fn.validationEngine){
    $('div.wpcf7 > form')
      .ajaxFormUnbind()  // Contact Form 7 のサブミットを unbind
      .find('input, textarea, select')
        .each(function(index){  // id 未設定の要素に id を付け加える
          if(! $(this).attr('id'))   
            $(this).attr('id', $(this).attr('name').replace('[]', '') + '-' + index)
          }).end()
      .find('input[name=last-name]').addClass('validate[required]').end()
      .find('input[name=first-name]').addClass('validate[required]').end()
      .find('input[name=email]').addClass('validate[required,custom[email]]').end()
      .find('textarea[name=message]').addClass('validate[required]').end()
      .validationEngine({
        validationEventTriggers:"blur",
        inlineValidation: true,
        /*success: function(){
          try{
            $('div.wpcf7 > form').ajaxSubmit({//ajax で submit
              beforeSubmit: wpcf7BeforeSubmit,
              dataType: 'json',
              success: wpcf7ProcessJson
            });
          } catch (e) {
          }
          return false;
        }*/
        success: function(){
          try{
            $('div.wpcf7 > form').ajaxSubmit({//ajax で submit
              	beforeSubmit: function(formData, jqForm, options) {
					jqForm.wpcf7ClearResponseOutput();
					jqForm.find('img.ajax-loader').css({ visibility: 'visible' });
					return true;
				},
				beforeSerialize: function(jqForm, options) {
					jqForm.find('.wpcf7-use-title-as-watermark.watermark').each(function(i, n) {
						$(n).val('');
					});
					return true;
				},
				data: {'_wpcf7_is_ajax_call':1},
				dataType: 'json',
				success: function(data) {
					var ro = $(data.into).find('div.wpcf7-response-output');
					$(data.into).wpcf7ClearResponseOutput();

					if (data.invalids) {
						$.each(data.invalids, function(i, n) {
							$(data.into).find(n.into).wpcf7NotValidTip(n.message);
						});
						ro.addClass('wpcf7-validation-errors');
					}

					if (data.captcha)
						$(data.into).wpcf7RefillCaptcha(data.captcha);

					if (data.quiz)
						$(data.into).wpcf7RefillQuiz(data.quiz);

					if (1 == data.spam)
						ro.addClass('wpcf7-spam-blocked');

					if (1 == data.mailSent) {
						$(data.into).find('form').resetForm().clearForm();
						ro.addClass('wpcf7-mail-sent-ok');

						//if (data.onSentOk)
						//	$.each(data.onSentOk, function(i, n) { eval(n) });
					} else {
						ro.addClass('wpcf7-mail-sent-ng');
					}

					if (data.onSubmit)
						$.each(data.onSubmit, function(i, n) { eval(n) });

					$(data.into).find('.wpcf7-use-title-as-watermark.watermark').each(function(i, n) {
						$(n).val($(n).attr('title'));
					});

					ro.append(data.message).slideDown('fast');
				}
            });
          } catch (e) {
          }
          return false;
        }
        
      });
  }
});
</script>

<?php get_footer(); ?>
