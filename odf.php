<?php
$site_base = WIKKA_BASE_URL;

// Make robust the way to find the css and the js. The handler can be on many directorys.
$relative_path = explode( ',', $this->GetConfigValue('handler_path'));
$my_handler_path = "plugins/actions";

// Check for the css and the js files. If exist overwrite the black/withe web.
foreach ($relative_path as $key => $value) {
	if ( is_file($relative_path[$key].'/webodf.js') ) {
		$my_handler_path = $relative_path[$key];
	}
}

// Get the upload path
if ($this->GetConfigValue('upload_path') == '')
{
	$this->SetConfigValue('upload_path','files');
}
$upload_path = $this->GetConfigValue('upload_path').DIRECTORY_SEPARATOR; # #89

$httmlpage = str_replace("wikka.php?wakka=", "$upload_path", $this->href("",$this->GetPageTag().DIRECTORY_SEPARATOR));

$odffile = $this->cleanUrl(trim($vars['odffile']));
#echo $upload_path;
#echo $httmlpage;

?>
<style type="text/css" media="screen">
body, div {
  padding: 0px;
  margin: 0px;
  border: 0px;
  background: #fff;
}
body.odfcanvas {
  height: 100%;
  background: black;
  text-align: center;
}
</style>

  <script src="actions/odf/webodf.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
function init() {
  var odfelement = document.getElementById("odf"),
      odfcanvas = new odf.OdfCanvas(odfelement);
  odfcanvas.load("<?php echo $httmlpage.$odffile; ?>");
}
window.setTimeout(init, 0);
  </script>

  <div id="odf"></div>
