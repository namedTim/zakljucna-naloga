<?php
/*
    Plugin Name: HoweScape Unity3d WebGL
    Plugin URI: http://www.howescape.com 
    Description: Plugin for Wordpress to create short code for Unity3d Game
    Author: P.T.Howe
    Text Domain: hs_unity3d_web_gl
	Domain Path: /languages
    Version: 0.7.2
    Author URI: http://www.HoweScape.com 
*/ 
// Roll-A-Ball game created with unity3d.com  5.3.3f1
// Space-Shooter game created with unity3d.com 5.3.3f1

// Constants
	DEFINE('RELEASE_SUFFIX', '-Release');
	DEFINE('GAME_DIR', 'game_dir');
	DEFINE(CHUNK_SIZE, '10240');
	DEFINE('HS_UNITY3D_SCORE_PLUGIN_URL', plugin_dir_url(__FILE__));
//	DEFINE('UNITY3D_VERSION',array('5.6.0','5.5.1','5.3.1'));

// Register Database

// Setup
// Check which system and path separator 
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    //echo 'This is a server using Windows!';
	DEFINE('DS', '/'); 
} else {
    //echo 'This is a server not using Windows!';
	DEFINE('DS', DIRECTORY_SEPARATOR); 
}

function unity3d_web_gl_init()
{
	wp_register_style('hs_unity3d_web_gl', plugin_dir_url( 'TemplateData_5_5_1/style.css', __FILE__));
	wp_register_script('hs_unity3d_web_gl', plugin_dir_url( 'TemplateData_5_5_1/UnityProgress.js', __FILE__ ));
}
add_action('init', 'unity3d_web_gl_init');

// Install Admin Options
add_action('admin_menu', 'hs_unity3d_web_gl_admin');

// Install data for testing

// Admin link

// Translation link
add_action('plugins_loaded', 'hs_unity3d_web_gl_load_textdomain');
// Unity Short code
add_shortcode('hs_unity3d_web_gl_game', 'hs_unity3d_game');
add_shortcode('hs_unity3d_web_gl_gamepage', 'hs_unity3d_gamepage');

// Function for loading translation.
function hs_unity3d_web_gl_load_textdomain() {
	load_plugin_textdomain( 'wp-admin-motivation', false, dirname( plugin_basename(__FILE__) ) . '/language/' );
}
// function for short code for displaying different games on same page
function hs_unity3d_gamepage ( $attrs ) 
{
	if (isset( $_POST['select-game']) && !empty($_POST['select-game'])) {
		$index = $_POST['gameGroup'];
		//echo " selected: ".$index."<br>";
	} else {
		$index = 0;
		//echo "Not selected: ".$index."<br>";
	}
	$gameList = ARRAY(ARRAY('Roll-A-Ball','Roll-A-Ball-Release',500,600,'name','5.3.1'),
					  ARRAY('Roll-A-Ball','Roll-A-Ball_5_5_1-Release',800,600,'name','5.5.1'),
					  ARRAY('Space-Shooter','Space-Shooter-Release',500,800,'name','5.3.1'));
	// Get list of games in game_dir dir and to end of array
	$dir = plugin_dir_path( __FILE__ );

	$releaseTagZip = RELEASE_SUFFIX.".zip";
	$dirLen = strlen($dir);
	$releaseLen = strlen($gameDir);
	//$gc = 0;
	foreach (glob($dir.DS.GAME_DIR.DS."*$releaseTag", GLOB_ONLYDIR) as $gameNamePath) {
		$fullLen = strlen($gameNamePath);
		$gameName = substr($gameNamePath, $dirLen, $fullLen - $releaseLen - $dirLen);
		//_e('Name:'.$gameName."<br>");
		$strPos = strpos($gameName,'_5_5_1-Release');
		$strPos = hs_unity3d_testGameNameForFormat($gameName, $Unity3D_Version);
		$rootDirSize = 10;
		if (strPos === false) {
			$gameNameShort = substr($gameName, $rootDirSize, 8);
		} else {
			$strReleasePos = strpos($gameName, RELEASE_SUFFIX);
			$gameNameShort = substr($gameName, $rootDirSize, $strReleasePos-$strPos-1);
			//echo " gameName:".$gameName." shortName:".$gameNameShort." strPos:".$strPos." strRel:".$strReleasePos.":<br>";
			$gameVersion = substr($gameName, $strPos, $strReleasePos-$strPos);
			$gameVersion = str_replace("_",".",$gameVersion);
			$gameNameShort2 = substr ($gameName, 10);
		}
		
		//$gameVersion = '5.5.1';
		//_e('Name:'.$gc.":".$gameName.":".$gameNameShort."<br>");
		array_push($gameList, ARRAY($gameNameShort, $gameNameShort2, 500, 600, 'name', $gameVersion));
		//echo "GA:".$gameNameShort.":".$gameNameShort2.":".$gameVersion."<br>";
		//echo "<tr><td><input type='radio' name='removeGroup' value='".$gameName."' ></td><td colspan='2'>".$gameName."</td></tr>";
		//$gc = $gc + 1;
	}
	$my_text = __('Plugin Games:', 'hs_unity3d_web_gl');
	echo '<DIV><form id="" method="post">';
	echo '<table><tr><td colspan="2"><h3>'.$my_text.'</h3></td></tr>';							  
		$gameIndex = 0;
		foreach ($gameList as $game) {
			if ($gameIndex == $index) {
				$checkedFlag = "checked='checked'";
			} else {
				$checkedFlag = "";
			}
			echo "<tr><td><input type='radio' name='gameGroup' value='".$gameIndex."' ".$checkedFlag."></td><td>".$game[0]."</td><td>".$game[5]."</td></tr>";							
			$gameIndex = $gameIndex + 1;
		}
	$my_buttonValue = __('Select Game', 'hs_unity3d_web_gl');
	echo '<tr><td colspan=2><input type="submit" name="select-game" value="'.$my_buttonValue.'" class="button button-primary"/></td></tr>';	
	echo '</table>';
	echo '</form></DIV>';
	$rowVersion = $gameList[$index][5];
	//echo "SelectedRow: ".$rowVersion."<br>";
	//echo "index: ".$index."<br>";
	if (0 == strcmp($rowVersion, '2017.4.0f1')) {
		$gamePage = hs_unity3d_2017_4_0f1($gameList[$index][0], $gameList[$index][1], $gameList[$index][2], $gameList[$index][3], $gameList[$index][0], $gameList[$index][5]);	
	} elseif ( 0 == strcmp($rowVersion,'5.6.0')) {
		$gamePage = hs_unity3d_5_6_0($gameList[$index][0], $gameList[$index][1], $gameList[$index][2], $gameList[$index][3], $gameList[$index][0], $gameList[$index][5]);		
	} elseif ( 0 == strcmp($rowVersion,'5.5.1')) {
		$gamePage = hs_unity3d_5_5_1($gameList[$index][0], $gameList[$index][1], $gameList[$index][2], $gameList[$index][3], $gameList[$index][0], $gameList[$index][5]);
	} else {
		//echo " 521: ".$gameList[$index][0].", ".$gameList[$index][1].", ".$gameList[$index][2].", ".$gameList[$index][3].", ".$gameList[$index][0]."<br>";
		$gamePage = hs_unity3d_5_3_1($gameList[$index][0], $gameList[$index][1], $gameList[$index][2], $gameList[$index][3], $gameList[$index][0]);
	}
	//$gamePage = hs_unity3d_5_5_1($gameName, $gameNameDir, $width, $height, $gameFileName, $gameVersion);
	//$gamePage = hs_unity3d_5_3_1($gameName, $gameNameDir, $width, $height, $gameFileName);
	
	return $gamePage;
}
function hs_unity3d_testGameNameForFormat($gameName)
{
	$Unity3D_Version=array('5.3.1','5.5.1','5.6.0','2017.4.0f1');
//	echo " ver0:".$Unity3D_Version[0]."<br>";
//	echo " ver1:".$Unity3D_Version[1]."<br>";	
	$strPos = false;
	foreach ($Unity3D_Version as $singleVersion) {
		$versionFileName = str_replace('.','_',$singleVersion);
		//echo "index:".$gameName." ".$strPos."::".$versionFileName.RELEASE_SUFFIX."<br>";
		if ($strPos == false) {
			$strPos = strpos($gameName,$versionFileName.RELEASE_SUFFIX);		
		}
	}
//	$strPos = strpos($gameName,'_5_5_1'+RELEASE_SUFFIX);
	//echo "index:".$gameName." ".$strPos."<br>";
	return $strPos;
}
//
function hs_unity3d_game( $atts )
{	
	$pull_unity_atts = shortcode_atts ( array(
				'src' => 'Roll-A-Ball',
				'width' => '480',
				'height' => '640',
				'u3dver' => '5.3.1'
			), $atts);

	if ( !$pull_unity_atts['src'] ) return "(missing unity src)";
	if ( !$pull_unity_atts['width'] ) return "(missing unity width)";
	if ( !$pull_unity_atts['height'] ) return "(missing unity height)";
	if ( !$pull_unity_atts['u3dver'] ) return "(missing unity version)";

	$width 	= $pull_unity_atts['width'];
	$height	= $pull_unity_atts['height'];
	$gameName = $pull_unity_atts['src'];

	$gameNameUpdated = preg_replace('/[^\x00-\x7f]/', '', $gameName);
//	echo 'nam2:'.$gameNameUpdated.':<br>';
	//echo 'hex:'.bin2hex($result).':<br>';
	$gameVersion = $pull_unity_atts['u3dver'];
	// Test if dir exists and then check game_dir
	$gameVersionDir = str_replace(".","_",$gameVersion);
	if (strlen($gameVersion)>0) {
		$gameNameDir = $gameNameUpdated."_".$gameVersionDir.RELEASE_SUFFIX;
	} else {
		$gameNameDir = $gameNameUpdated.RELEASE_SUFFIX;
	}
	
	if ($gameVersion == '2017.4.0f1') {
//		echo "gameSel1:".$gameName.":".$gameNameDir.":".$gameVersion."<br>";
		$gamePage = hs_unity3d_2017_4_0f1($gameName, $gameNameDir, $width, $height, $gameFileName, $gameVersion);	
	} elseif ($gameVersion == "5.6.0") {
///		echo "gameSel2:".$gameVersion."<br>";
		$game_page = hs_unity3d_5_6_0($gameName, $gameNameDir, $width, $height, $gameFileName, $gameVersion);
	} elseif ($gameVersion == "5.5.1") {
		$game_page = hs_unity3d_5_5_1($gameName, $gameNameDir, $width, $height, $gameFileName, $gameVersion);
	} else {
		//echo " 165: ".$gameNameUpdated.", ".$gameNameDir.", ".$width.", ".$height.", ".$gameFileName."<br>";
		$game_page = hs_unity3d_5_3_1($gameNameUpdated, $gameNameDir, $width, $height, $gameFileName);
	}
	return $game_page;
}

function hs_unity3d_2017_4_0f1($gameName, $gameDir, $width, $height, $gameFileName, $gameVersion) {
	// Build page based on Builds.html created in game Builds directory
	// Build Symbol to represent path of game. Give preference to Release
	//echo "checkPath:".plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir.":<br>";
	//echo "checkPath:".plugin_dir_path( __FILE__ ).$gameDir.":<br>";
	if (file_exists(plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir)) {
		$gameLocation = plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir;
		$gameLocationPath = GAME_DIR.DS.$gameDir;
//		echo "1GameLoc:".$gameName.":".$gameLocation.":".$gameLocationPath.":<br>";
	} else if (file_exists(plugin_dir_path( __FILE__ ).$gameDir)) {
		$gameLocation = plugin_dir_path( __FILE__ ).$gameDir;
		$gameLocationPath = $gameDir;
//		echo "2GameLoc:".$gameName.":".$gameLocation.":".$gameLocationPath.":<br>";
	} else {
		_e('Game not found', 'hs_unity3d_web_gl');
	}
	$my_gameName = __($gameName, 'hs_unity3d_web_gl');
	$game_page = 
				"<link rel=\"shortcut icon\" href=\"".plugins_url("/TemplateData_2017_4_0f1/favicon.ico",__FILE__)."\">".
				"<link rel=\"stylesheet\" href=\"".plugins_url("/TemplateData_2017_4_0f1/style.css",__FILE__)."\">".
				"<script type='text/javascript' src=\"".plugins_url("/TemplateData_2017_4_0f1/UnityProgress.js",__FILE__)."\"></script>".
				"<script type='text/javascript' src=\"".plugins_url($gameLocationPath.DS."UnityLoader.js",__FILE__)."\"></script>".
				"<script type='text/javascript'>".
				"var gameInstance = UnityLoader.instantiate(\"gameContainer\", \"".plugins_url($gameLocationPath.DS.$gameName.".json",__FILE__)."\", {onProgress: UnityProgress});".
				"</script>".
				"<div class=\"webgl-content\">".
				"<div id=\"gameContainer\" style=\"width: ".$width."px; height: ".$height."px\"></div>".
				"<div class=\"footer\">".
				"<div class=\"webgl-logo\"></div>".
				"<div class=\"fullscreen\" onclick=\"gameInstance.SetFullscreen(1)\"></div>".
				"<div class=\"title\">".$my_gameName."</div>".
				"</div>".
				"</div>";
	echo $game_page;
//	echo "<br>empty<br>";
	return $game_page;
}

function hs_unity3d_5_6_0($gameName, $gameDir, $width, $height, $gameFileName, $gameVersion) {

	// Build page based on Builds.html created in game Builds directory
	// Build Symbol to represent path of game. Give preference to Release
	//echo "checkPath:".plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir.":<br>";
	if (file_exists(plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir)) {
		$gameLocation = plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir;
		$gameLocationPath = GAME_DIR.DS.$gameDir;
	} else if (file_exists(plugin_dir_path( __FILE__ ).$gameDir)) {
		$gameLocation = plugin_dir_path( __FILE__ ).$gameDir;
		$gameLocationPath = $gameDir;
	} else {
		_e('Game not found', 'hs_unity3d_web_gl');
	}
	//_e(' width='.$width.' height='.$height.'<br>');
	$my_gameName = __($gameName, 'hs_unity3d_web_gl');
	$game_page = 
				"<link rel=\"shortcut icon\" href=\"".plugins_url("/TemplateData_5_6_0/favicon.ico",__FILE__)."\">".
				"<link rel=\"stylesheet\" href=\"".plugins_url("/TemplateData_5_6_0/style.css",__FILE__)."\">".
				"<script type='text/javascript' src=\"".plugins_url("/TemplateData_5_6_0/UnityProgress.js",__FILE__)."\"></script>".
				"<script type='text/javascript' src=\"".plugins_url($gameLocationPath.DS."UnityLoader.js",__FILE__)."\"></script>".
				"<script>".
				"var gameInstance = UnityLoader.instantiate(\"gameContainer\", \"".plugins_url($gameLocationPath.DS.$gameName.".json",__FILE__)."\", {onProgress: UnityProgress});".
				"</script>".
				"<div class=\"webgl-content\">".
				"<div id=\"gameContainer\" style=\"width: ".$width."px; height: ".$height."px\">".
				"</div>".
				"<div class=\"footer\">".
				"<div class=\"webgl-logo\"></div>".
				"<div class=\"fullscreen\" onclick=\"gameInstance.SetFullscreen(1)\"></div>".
				"<div class=\"title\">".$my_gameName."</div>".
				"</div>".
				"</div>";	
	return $game_page;
}
function hs_unity3d_5_5_1($gameName, $gameDir, $width, $height, $gameFileName, $gameVersion) {
	// Build page based on Builds.html created in game Builds directory
	// Build Symbol to represent path of game. Give preference to Release
	//echo "checkPath:".plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir.":<br>";
	if (file_exists(plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir)) {
		$gameLocation = plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir;
		$gameLocationPath = GAME_DIR.DS.$gameDir;
	} else if (file_exists(plugin_dir_path( __FILE__ ).$gameDir)) {
		$gameLocation = plugin_dir_path( __FILE__ ).$gameDir;
		$gameLocationPath = $gameDir;
	} else {
		_e('Game not found', 'hs_unity3d_web_gl');
	}
	//echo "<br>GameLoc:".$gameLocationPath."<br><br>";
	// Check for type of extension.
	if (file_exists($gameLocation.DS.$gameName."data")) { // Ext is uncompressed
		$gameFileExt = "";
	} else if (file_exists($gameLocation.DS.$gameName."datagz")) { // Ext is compressed
		$gameFileExt = "gz";
	} else { // Unknown ext
		$gameFileExt = "";
	}
	$gameVersionPath = "_".str_replace(".", "_", $gameVersion);
	//echo "ver:".$gameVersionPath."<br>";
//	$selectedLocation = $selectedLocation.$gameName."_".$gameVersionPath.RELEASE_SUFFIX.DS.$gameName;
//	$selectedLocationLoader = $gameLocation.DS."UnityLoader.js";
//	echo "<br>Path: ".$selectedLocation."<br>";
//	echo "Path2: ".$selectedLocationLoader."<br>";
	//echo "load: ".$selectedLocationLoader."<br>";
	//echo "Ext: ".$gameFileExt."<br>";
	//$gameVersionPath = "_".str_replace(".", "_", $gameVersion);
	//echo "path:".$gameLocationPath.":<br>";
	$my_gameName = __($gameName, 'hs_unity3d_web_gl');
	$game_page = "<link rel=\"shortcut icon\" href=\"".plugins_url("/TemplateData_5_5_1/favicon.ico",__FILE__)."\"/>".
				//"<title>Unity WebGL Player | ".$gameName."</title>".
				"<p class=\"header\"><span>Unity WebGL Player | </span>".$my_gameName."</p>".
				"<div class=\"template-wrap clear\">".
				"<canvas class=\"emscripten\" id=\"canvas\" oncontextmenu=\"event.preventDefault()\" height=\"".$height."px\" width=\"".$width."px\"></canvas>".
					"<br>\n".
					"<div class=\"logo\"></div>\n".
					"<div class=\"fullscreen\"><img src=\"".plugins_url("TemplateData_5_5_1/fullscreen.png", __FILE__)."\" width=\"38\" height=\"38\" alt=\"Fullscreen\" title=\"Fullscreen\" onclick=\"SetFullscreen(1);\" /></div>\n".
					"<div class=\"title\">".$my_gameName."</div>\n".
				"</div>\n".
				"<script type='text/javascript'>\n".
					"var Module = {\n".
						"TOTAL_MEMORY:   268435456,\n".
						"errorhandler: null,\n".
						"compatibilitycheck: null,\n".
						"backgroundColor: \"#222C36\",\n".
						"splashStyle: \"Light\",\n".
						"dataUrl: \"".plugins_url($gameLocationPath.DS.$gameName.".data".$gameFileExt,__FILE__)."\",\n".
						"codeUrl: \"".plugins_url($gameLocationPath.DS.$gameName.".js".$gameFileExt,__FILE__)."\",\n".
						"asmUrl: \"".plugins_url($gameLocationPath.DS.$gameName.".asm.js".$gameFileExt,__FILE__)."\",\n".
						"memUrl: \"".plugins_url($gameLocationPath.DS.$gameName.".mem".$gameFileExt,__FILE__)."\",\n".
					"};\n".
				"</script>\n".
				"<script type='text/javascript' src=\"".plugins_url($gameLocationPath.DS."UnityLoader.js",__FILE__)."\"></script>";				
				//"<script src=\"".$selectedLocationLoader."\"></script>";	
					// $gameName.$gameVersionPath.RELEASE_SUFFIX.DS.$gameName
	return $game_page;
}

function hs_unity3d_5_3_1($gameName, $gameDir, $width, $height, $gameFileName) {
	// 
	$altGameName = 'Builds_WebGL';

	if (file_exists(plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir)) {
		$gameLocation = plugin_dir_path( __FILE__ ).GAME_DIR.DS.$gameDir;
		$gameLocationPath = GAME_DIR.DS.$gameDir;
	} else if (file_exists(plugin_dir_path( __FILE__ ).$gameDir)) {
		$gameLocation = plugin_dir_path( __FILE__ ).$gameDir;
		$gameLocationPath = $gameDir;
	} else if (file_exists(plugin_dir_path( __FILE__ ).$gameName."-Release")) {
		$gameLocation = plugin_dir_path( __FILE__ ).$gameName."-Release";
		$gameLocationPath = $gameName."-Release";		
	} else {
		_e('Game not found', 'hs_unity3d_web_gl');
	}

	// Check for type of extension.
	if (file_exists($gameLocation.DS.$gameName.".data")) { // Ext is uncompressed
		$gameFileExt = "";
	} else if (file_exists($gameLocation.DS.$gameName.".datagz")) { // Ext is compressed
		$gameFileExt = "gz";
	} else if (file_exists($gameLocation.DS.$altGameName.".data")) {
		//$gameName = $altGameName;
		$gameFileExt = "";
	} else if (file_exists($gameLocation.DS.$altGameName.".datagz")) {
		//$gameName = $altGameName;
		$gameFileExt = "gz";
	} else { // Unknown ext
		$gameFileExt = "";
	}
//	echo "br:".$gameFileExt."<br>";
	$my_gameName = __($gameName, 'hs_unity3d_web_gl');
	// Build page based on Builds.html created in game Builds directory
	$game_page ="<meta charset=\"utf-8\">".
				"<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">".
				"<title>Unity WebGL Player | ".$gameName."</title>".
				"<link rel=\"shortcut icon\" href=\"".plugins_url("/TemplateData/favicon.ico",__FILE__)."\"/>".
  
				"<p class=\"header\"><span>Unity WebGL Player | </span>".$gameName."</p>".
				"<div class=\"template-wrap clear\">".
				"<canvas class=\"emscripten\" id=\"canvas\" oncontextmenu=\"event.preventDefault()\" height=\"".$height."px\" width=\"".$width."px\"></canvas>".
					"<br>".
					"<div class=\"logo\"></div>".
					"<div class=\"fullscreen\"><img src=\"".plugins_url("/TemplateData/fullscreen.png", __FILE__)."\" width=\"38\" height=\"38\" alt=\"Fullscreen\" title=\"Fullscreen\" onclick=\"SetFullscreen(1);\" /></div>".
					"<div class=\"title\">".$gameName."</div>".
				"</div>".
				"<script type='text/javascript'> \n".
					"var Module = { \n".
						"TOTAL_MEMORY:   268435456, \n".
						"errorhandler: null, \n".
						"dataUrl: \"".plugins_url($gameName."-Release/Builds_WebGL.data".$gameFileExt,__FILE__)."\", \n".
						"codeUrl: \"".plugins_url($gameName."-Release/Builds_WebGL.js".$gameFileExt,__FILE__)."\", \n".
						"memUrl: \"".plugins_url($gameName."-Release/Builds_WebGL.mem".$gameFileExt,__FILE__)."\", \n".
					"};\n".
				"</script>\n".
				"<script type='text/javascript' src=\"".plugins_url($gameName."-Release/UnityLoader.js",__FILE__)."\"></script>\n";

	return $game_page;
}
function hs_unity3d_web_gl_admin() {
	$my_settingsPage = __('HoweScape Unity3d Game Settings', 'hs_unity3d_web_gl');
	add_options_page('Unity3d Games', $my_settingsPage, 'manage_options', 
					'hs_unity3d_web_gl_setting', 'hs_unity3d_admin_options_page');
}

function hs_unity3d_admin_options_page($PageName) {
	global	$wpdb;
	global	$current_user;
	
	if (isset( $_POST['extract-game']) && !empty($_POST['extract-game'])) {
		// Get selected zip file to unzip into plugin
		$zipfilename = $_POST['extractGroup'];
		// Get file name with out extension
		$zipfilenameparts = explode("/",$zipfilename);
		$partscount = count($zipfilenameparts);
		$zipfileext = $zipfilenameparts[$partscount-1];
		$zipfilepart = explode(".",$zipfileext);		
		
		// Build dir name to expanded game dir
		$expandedGameDir = plugin_dir_path(__FILE__).GAME_DIR.DS.$zipfilepart[0];
		
		// Create / verify that game_dir exists
		if (!file_exists(plugin_dir_path(__FILE__).GAME_DIR)) {
			$makedirstatus = mkdir(plugin_dir_path(__FILE__).GAME_DIR);
		}
		if (file_exists($expandedGameDir)) {
			// Remove current files to create new ones.
			recursiveRemoveDirectory($expandedGameDir);
		}
		
		$makedirstatus = mkdir($expandedGameDir);	// Create game dir
		
		WP_Filesystem();
		$mediaDir = wp_upload_dir();	// Get dir of media
		$zipfilename = $_POST['extractGroup'];

		$unzipfilestatus = unzip_file($mediaDir[basedir].$zipfilename, 
										$expandedGameDir);
		if ($unzipfilestatus) {
			//echo "<br>Files extracted <br>";
		} else {
			echo '<br> error Open: '.$zipfilename.' :End<br>';
			//echo '<br> error Open: '.zipFileErrMsg($Zip_Handle).' :End<br>';
		}

	} else if (isset( $_POST['remove-game']) && !empty($_POST['remove-game'])) {
		// Get selected zip file to unzip into plugin
		$dirfilename = $_POST['removeGroup'];
		
		$dir = plugin_dir_path( __FILE__ );
		$fullDir = $dir.substr($dirfilename,1).DS."*";		
		$fullDir = str_replace("\\",DS,$fullDir);	
		echo "fulldir:".$fullDir."<br>";
		recursiveRemoveDirectoryGame($fullDir);
	}
	echo '<div class="wrap">';
	$my_pluginGames = __('Plugin Games:', 'hs_unity3d_web_gl');
	$my_availableGames = __('HoweScape Unity3d Available Games', 'hs_unity3d_web_gl');
	get_screen_icon();
	echo('<h2>'.$my_availableGames.'</h2>');
	//echo('<h2>'.$my_availableGames.'</h2>');
	echo('<table><tr><td colspan="2"><h3>'.$my_pluginGames.'</h3></td><td></td></tr>');
	$dir = plugin_dir_path( __FILE__ );
	
	$releaseTagZip = RELEASE_SUFFIX.".zip";
	$dirLen = strlen($dir);
	$releaseLen = strlen($gameDir);
	foreach (glob($dir."*".RELEASE_SUFFIX, GLOB_ONLYDIR) as $gameNamePath) {
		$fullLen = strlen($gameNamePath);
		$gameNameOnly = substr($gameNamePath, $dirLen, $fullLen - $releaseLen - $dirLen);
		echo '<tr><td colspan="2">'.$gameNameOnly.'</td></tr>';
	}
	$my_mediaFileGames = __('Media File Games', 'hs_unity3d_web_gl');
	echo '<tr><td colspan="2"><h3>'.$my_mediaFileGames.'</h3></td></tr>';
	echo '<form id="" method="post">';
	foreach (glob($dir.DS.GAME_DIR.DS."*$releaseTag", GLOB_ONLYDIR) as $gameNamePath) {
		$fullLen = strlen($gameNamePath);
		$gameName = substr($gameNamePath, $dirLen, $fullLen - $releaseLen - $dirLen);
		echo "<tr><td><input type='radio' name='removeGroup' value='".$gameName."' ></td><td colspan='2'>".$gameName."</td></tr>";
	}
	$my_removeGame = __('Remove Game', 'hs_unity3d_web_gl');
	$my_availableMediaFileGames = __('Available Media File games', 'hs_unity3d_web_gl');
	echo '<tr><td colspan=2>';
	echo '<input type="submit" name="remove-game" value="'.$my_removeGame.'" class="button button-primary"/></td></tr>';	
	echo '</form>';
	echo '<tr><td colspan="2"><h3>'.$my_availableMediaFileGames.'</h3></td></tr>';
	$upload_dir = wp_upload_dir();
	$basedirLen = strlen($upload_dir[basedir]);
	echo '<form id="" method="post">';
	foreach (glob($upload_dir[basedir].DS."*", GLOB_ONLYDIR) as $gameNamePathYear) {
		$gameNamePathYearLen = strlen($gameNamePathYear);
		foreach (glob("$gameNamePathYear/*", GLOB_ONLYDIR) as $gameNamePathYearMonth) {
			foreach (glob("$gameNamePathYearMonth/*-Release.zip") as $gameNamePathYearMonthZip) {
				echo "<tr><td><input type='radio' name='extractGroup' value='".substr($gameNamePathYearMonthZip,$basedirLen)."' ></td><td>".substr($gameNamePathYearMonthZip,$basedirLen)."</td></tr>";
			}
		}
	}
	$my_extractGames = __('Extract games from media zip file into plugin for play', 'hs_unity3d_web_gl');
	$my_extractGameButton = __('Extract Game', 'hs_unity3d_web_gl');
	echo '<tr><td></td><td></td></tr>';
	echo '<tr><td colspan=2>'.$my_extractGames.'</td></tr>';
	echo '<tr><td colspan=2>';
	echo '<input type="submit" name="extract-game" value="'.$my_extractGameButton.'" class="button button-primary"/></td></tr>';
	echo '</form>';

	echo '</table>';
	
	echo '</div>';
}

function recursiveRemoveDirectoryGame($directory)
{
	$directoryOnly = substr($directory,0,strlen($directory)-2);
    foreach(glob("{$directory}") as $file)
    {
        if(is_dir($file)) { 
            recursiveRemoveDirectoryGame($file."/*");
			//echo "intoDir:".$file."<br>";			
        } else {
            unlink($file);
			//echo ":".$file.":<br>";
        }
    }
	if (is_dir($directoryOnly)) {
		//echo "is dir<br>";
		rmdir($directoryOnly);
	} 
}

/**
* This method is recursive to remove a directory and its contents.
* This is necessary when a unity3d game is being extracted from the ZIP file. 
* In order to ensure only the files from the zip are present.
*/
function recursiveRemoveDirectory($directory)
{
    foreach(glob("{$directory}/*") as $file)
    {
        if(is_dir($file)) { 
            recursiveRemoveDirectory($file);
        } else {
            unlink($file);
        }
    }
    rmdir($directory);
}
?>