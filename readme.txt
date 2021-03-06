
 ╔════════════════════════════════════════════════════════════════════════════╗
 ║                                                                            ║
 ║   pChart - a PHP Charting library                                          ║
 ║                                                                            ║
 ║   Version     : 2.2.3                                                      ║
 ║   Made by     : Jean-Damien POGOLOTTI                                      ║
 ║   Severe refactoring : Momchil Bozhinov				      ║
 ║   Last Update : 01/02/2018                                                 ║
 ║                                                                            ║
 ╚════════════════════════════════════════════════════════════════════════════╝

 ≡ WHAT CAN pCHART DO FOR YOU? ────────────────────────────────────────────────

  pChart is a PHP framework that will help you to create anti-aliased charts or
  pictures directly  from your web  server. You can  then display the result in
  the client browser, sent it by mail or insert it into PDFs. 

 ≡ PACKAGE CONTENTS ───────────────────────────────────────────────────────────
 
 ┬
 │
 ├─ /cache			This folder is used by the pCache module.
 │
 ├─ /temp			This folder is used by the pImageMap module.
 │
 ├─ /pChart			This folder contains the library core classes.
 │   │
 │   ├─ pBarcode39	Class to draw Code 39 barcodes.
 │   ├─ pBarcode128	Class to draw Code 128 barcodes.
 │   ├─ pBubble		Class to draw bubble charts.
 │   ├─ pCharts		Class to draw several types of charts
 │   ├─ pColor		Data structure for colors
 │   ├─ pColorGradient	Data structure for gradient color
 │   ├─ pData		Class to manipulate chart data.
 │   ├─ pDraw		Extended drawing functions.
 │   ├─ pDraw.Debug	Spoofed GD functions. Dump GD operations.
 │   ├─ pException	Exceptions for all classes
 │   ├─ pIndicator	Class to draw indicators.
 │   ├─ pPie	        Class to draw pie charts.
 │   ├─ pSpring		Class to draw spring charts.
 │   ├─ pScatter	Class to draw scatter charts.
 │   ├─ pStock		Class to draw stock charts.
 │   └─ pSurface	Class to draw surface charts.
 │
 ├─ /pChart/pCache/
 │   │
 │   ├─ pCacheFile		Class enabling chart caching functionalities.
 │   ├─ pCacheSQLite		Class enabling chart caching to a SQLite database.
 │   └─ pCacheInterface		Interface for the caching classes.
 │	
 ├─ /pChart/pImageMap/
 │   │
 │   ├─pImageMapFile		Class for the Image Maps using file storage
 │   ├─pImageMapInterface 	Interface for the Image Map classes.
 │   ├─pImageMapSQLite		Class for the Image Maps with SQLite storage.
 │   └─pImageMapSession		Class for the Image Maps using session storage
 │   
 ├─ /pChart/data		This folder contains extended data.
 │   │
 │   ├─ 39.db			Code 39 barcodes static database.
 │   └─ 128.db			Code 128 barcodes static database.
 │
 ├─ /pChart/fonts		This folder contains a bunch of TTF fonts.
 │
 ├─ /pChart/palettes		Sample palettes files.
 │
 ├─ /examples			This folder contains some PHP examples.
 │   │
 │   ├─ delayedLoader		Delayed loader script example.
 │   ├─ imageMap		Image map script example.
 │   └─ sandbox			Powerful dev. tool to design your charts.
 │
 ├─ change.log			History of all the changes since the 2.0
 └─ readme.txt			This file.

 ≡ PREREQUISITES ──────────────────────────────────────────────────────────────

  The pChart library is compatible with PHP 7+ versions.
  It requires the GD and FreeType PHP extensions installed.

 ≡ RUNNiNG THE EXAMPLES ───────────────────────────────────────────────────────

  pChart is  shipped with  examples (located  in the /examples folder) that you
  can either render from a web page using your http and pointing to this folder
  or from the command line invoking the php interpreter.

  On windows OS,  assuming that  your PHP binaries  are correctly configured in
  the PATH  environment variable  you can  also execute  the BuildAll.cmd batch
  file.


 ≡ LICENSE ────────────────────────────────────────────────────────────────────

  The  pChart library  is  released  under  two  different  licenses.  If  your
  application is not a commercial one (eg: you make no money by redistributing
  it) then the GNU GPLv3 license (General Public License) applies. This license
  allows you to  freely integrate this library in your applications, modify the
  code and redistribute it in bundled packages as long as your application is
  also distributed with the GPL license. 

  The GPLv3 license description can be found in the LICENSE file.

  If your  application can't  meet the GPL  license or is a commercial one (eg:
  the library is  integrated in a software or an appliance you're selling) then
  you'll have to buy a commercial  license. With this license you don't need to
  make publicly available your application code under the GPL license terms.

  Commercial license price are depending of your needs.

  Please consult the web page : http://www.pchart.net/license


 ≡ EXTERNAL COPYRIGHTS ────────────────────────────────────────────────────────

  Those external  components are  only provided as a  base to run examples. The
  pChart library does not depends on any of them to be used.

  Famfamfam  icons has  been made by Mark James,  Rounded corners lite has been
  coded by  Cameron Cooke and  Tim Hutchison, Javascript  Color Picker has been
  written by Honza Odvarko.

  The provided font files are licensed under their own terms :

   │
   ├─ advent_light.ttf	Copyright Andreas K. inde
   ├─ Bedizen.ttf	Copyright Tepid Monkey Fonts
   ├─ calibri.ttf	Copyright Microsoft
   ├─ Forgotte.ttf	Copyright Ray Larabie
   ├─ GeosansLight.ttf	Copyright Manfred Klein
   ├─ MankSans.ttf	Copyright Manfred  Klein
   ├─ pf_arma_five.ttf	Copyright Yusuke Kamiyamane
   ├─ Silkscreen.ttf	Copyright Jason Aleksandr Kottke
   └─ verdana.ttf	Copyright Microsoft


 ≡ SUPPORT ────────────────────────────────────────────────────────────────────

  Since  the  beginning, pChart  is a community  driven project. You're missing
  feature then ask! We'll  try to  get it implemented  in the future version or
  you'll be guided to create a class extension for your own needs. 

  Original pChart portal : http://www.pchart.net
  Documentation		 : php -S 127.0.0.1:8080
  Report issues          : https://github.com/bozhinov/pChart2.0-for-PHP7/issues


 ---
 (c)2014 Jean-Damien POGOLOTTI - 13k lines of codes
 2018 Momchil Bozhinov - 11k lines of codes