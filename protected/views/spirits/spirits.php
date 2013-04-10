<?php 
// include Handlebar Templates
$this->renderPartial('brews');
?>


<script type="text/javascript">
  // brews - load data object (JSON) into JavaScript variable
  billy.templateData = <?php echo $brews; ?>;

  // compile template
  var brewTemplateSource   = $("#brew-template").html();
  var brewTemplate = Handlebars.compile(brewTemplateSource);

  // render template
  var brewTemplateHtml = brewTemplate(billy.templateData);
  $('#content').append(brewTemplateHtml);
</script>