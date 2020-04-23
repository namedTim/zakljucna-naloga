=== HoweScape Unity3d WebGL ===
Contributors: pthowe
Donate Link: http://HoweScape.com
Tags:
Requires at least: 4.0.0
Tested up to: 4.8.1
Requires PHP: 5.3.5
Stable tag: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin to allow the inclusion of a Unity3d WebGL application. A short code is created which can displayed.

== Description ==

The Unity3d WebGL support creates a directory of files. 
This is not convent to load  on your WordPress web site. 
This plugin takes the "Release" directory from your game and places it 
inside the plugin. When compiling the output directory need to be "Builds_WebGL". 
This plugin can then be referenced from with a short code. 
The parameters in the short code are the game name and the width and height.

ie. [hs_unity3d_web_gl_game src="Roll-A-Ball" height=500 width=600]

To extend the support for Unity3d to version 5.5.1 an additional parameter has been added. 
This parameter allows the specification of a version. The version support is 5.5.1 or the original version supported by the plugin. (ie. original version 5.3.1)
The Unity3d version 5.5.1. creates a directory  "Development". This is what I have uploaded in the included example. (ie. Roll-A-Ball-5_5_1-Release)
The short code  is now looks like the following example.

ie. [hs_unity3d_web_gl_game src="Roll-A-Ball" height=500 width=600 u3dver=5.5.1]

In reviewing the latest verion of Unity3d I noticed that the file orginization for the WebGL has been updated again. 
With this update there are now 4 supported version 5.3.1, 5.5.1, 5.6.0 and 2017.4.0f1 When using the newest version you would have a short code like the following.

ie. [hs_unity3d_web_gl_game src=Roll-A-Ball height=500 width=600 u3dver=2017.4.0f1]

All other features should work as before. The output created from Unity3D has changed between versions. 
With 2017.4.0f1 the build asks you to select an output directory. This directory name becauses the name of your Unity3D game. After the build is complete 
you need to create a zip file. The name of the zip file needs to be the output directory name you selected. Add to the end of the output directory 
the version number of the Unity3D. After the version needs to follow the string "-Release". The extension is ".zip". So if your output directry is called 
"Roll-A-Ball" the file you create will be "Roll-A-Ball_2017_4_0f1-Release.zip". The next question is what information goes in the zip file. The build process
creates a directory "Build". Place all the files from that directory into the zip file. The build process also creates a TemplateData. The plugin already 
contains a copy of this directory for each supported version. 
There are other features being considered please let me know if you desire anything functionality.

With the addition of the settings page it is now possible to place 
the release directory in a zip file. (ie. &lt;gamename&gt;-Release.zip)
Once the file is uploaded the setting page for the plugin will allow extraction 
of the files into a location which the short code can locate. When naming games from version 5.5.1 you will need 
to include the version number. (ie. &lt;gamename&gt;-5_5_1-Release.zip) With this version place the 
files from the Development directory in the zip file. For the latest verion it is the same. (ie. &lt;gamename&gt;-5_6_0-Release.zip)

In the process of doing the latest update I wanted to switch between the different games to verify that everything was working. 
To make this task simpler I added a short code which displays a list of the avaiable games and allows the selection of a game. 
The major reason for the addition was game development. Since I thought it might be useful I have added it to the plugin. 

ie. [hs_unity3d_web_gl_gamepage]

If you use this short code with just the plugin you will have three games. Two versions of the  Roll-A-Ball sample game and the space-shooter sample game. 
There are 2 ways games can be added one is making them part of the plugin. The second is as a zip file which gets uploaded to the media directory. 
Once uploaded the uploaded game zip file can be expanded into the plugin from the settings page. There is also a delete option on the settings page. 
It can remove any game added from the media directory.

== Installation ==

<h4>From your WordPress dashboard</h4>
<ol>
<li>Visit 'Plugins > Add New'</li>
<li>Search for 'HoweScape Unity3d WebGL'</li>
<li>Activate HoweScape Unity3d WebGL from your Plugins page. </li>
</ol>

<h4>From WordPress.org</h4>
<ol>
<li>Download HoweScape Unity3d WebGL.</li>
<li>Upload the 'HoweScape Unity3d WebGL' directory to your '/wp-content/plugins/' directory, using your favorite method (ftp, sftp, scp, etc...)</li>
<li>Activate HoweScape Unity3d WebGL from your Plugins page. </li>
</ol>

== Frequently Asked Questions ==

<ol>
<li>Can I use this plugin with my own Unity3d game?
	<p>Yes, The plugin currently supports 4 different versions of Unity3d games
	<ul>
	<li>5.3.1</li>
	<li>5.5.1</li>
	<li>5.6.0</li>
	<li>2017.4.0f1</li>
	</ul>
	The exact steps to include a game very with versions. To add a game you create a ZIP file. The zip file name is the game name with version and the string "Release".
	This is to allow it to be identified and moved into the plugin. The contents are the zip file are from the "Release" directory or the "build" directory based on version.
	The exact method of including your own game has changed between versions due to changed in Unity3d.</p>
	<P>The first version supported is 5.3.1. For this version take the release directory from Unity3d Build directory and place in the plugin directory. The game name then is used in the short code.</p>
	<p>The game name can not contain spaces</P>
</li>
<li>Can there be multiple games in the plugin?
<p>Yes. Each game is in its own &lt;gamename&gt;-Release directory</p>
<p>There are currently three games in the delivered plugin.</p>
<p>For other than version 5.3.1 the file name has been expanded to include the version. This results in &lt;gamename&gt;_&lt;VersionNumber&gt;-Release. The version numbers contain dots between items. When placing it in the file name replace the dots with underscore.</p>
</li>
<li>Can the games be placed outside the plugin?
<p>Yes, In the media directory</p>
<p>The settings page allows games to be extracted into the plugin. This process looks for the "-Release.zip" at the end of the file name. A list of these is presented on the settings page. You can select a file to be expanded into the plugin. The game will then be available to the plugin short code.</p></li>
<li>How do I move the ball?
<p>The arrow keys allow movement of the ball to collect the cubes.</p></li>
<li>How to play space Shooter. 
<p>Arrow keys move ship. 
<p>Mouse button fires gun. Mouse needs to be in window.</li>
<li>My game does not work I get an error message. 
<p>"An error occured running the Unity content on this page."</p>
<p>"The error was: uncaught exception: incorrect header check"</p>
When I compiled my Unity3d game I used "Builds_WebGL" as the directory. 
This seems to be a requirement of the plugin.</li>
<li>For version 5.5.1 and 5.6.0 the game name restriction.
<p>With these versions the restriction on build directory has been removed. The names needs to not contain spaces.</p></li>
<li>How do I build the file name to upload a game?
<p>The file you create is a zip file. The file name has several parts. The general form is &lt;gameName&gt;_&lt;version&gt;-Release.zip</P></li>
</ol>

== Screenshots ==

1. Screen capture of Roll-A-Ball game from unity3d.com
2. Screen capture of Roll-A-Ball game with updates to colors
3. Screen capture of Space-Shooter game from unity3d.com tutorials
4. Screen capture of error message caused by building to incorrect directory


== Changelog ==
<h4>0.7.1</h4>
<ul>
<li>Update to add support for Unity3d 2017.4.0f1</li>
<li>Made updates to address HTML warnings</li>
</ul>

<h4>0.6.1</h4>
<ul>
<li>Updated application to support translation.</li>
<li>Tested with Wordpress version 4.8.1</li>
</ul>

<h4>0.5.1</h4>
<ul>
<li>Added support for Unity3d 5.6.0. This is an expansion of the parameter added in version 0.3.1</li>
<li></li>
</ul>

<h4>0.3.1</h4>
<ul>
<li>Added support for Unity3d 5.5.1. This requires adding a parameter to the Short code.</li>
<li>This parameter is not required for Web GL games which have a .htaccess file</li>
<li>Example of parameter u3dver=5.5.1</li>
<li>At this time there is no other values which are supported.</li>
<li>The template data directory was also added to support version 5.5.1. </li>
<li></li>
</ul>

<h4>0.1.1</h4>
<ul>
<li>Added Settings page. This provides three groups of information. 
The first group is a list of the Unity3d games in the plugin. 
The second lists is of Unity3d games expanded into the plugin.
The third is a list of zip files in the media directory which the plugin recoginise as Unity3d gamems</li>
<li>The extract button takes the identified zip file and expands the game into a subdirectory.</li>
<li>Updated processing to to include search to include expanded games.</li>
</ul>

<h4>0.2</h4>
<ul>
<li>Update file Calling to use recommended</li>
<li>Removed "Created with unity" link from plugin</li>
</ul>

<h4>0.1</h4>
<ul>
<li>Original Release</li>
</ul>

== Upgrade Notice ==

Fourth update to add support for translation and test with Wordpress 4.8.1

Third update to add support for 5.6.0. Also added short code for list of games.

Second update to add settings page and support extract of game from media zip file.

First update to correct file location references. Removed "Created with Unity" link.

Being initial release there is no notice

== Arbitrary section ==

== A brief Markdown Example ==

[hs_unity3d_web_gl_game src="Roll-A-Ball" height=500 width=600]