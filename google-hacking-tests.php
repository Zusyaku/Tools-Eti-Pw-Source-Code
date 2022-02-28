<!DOCTYPE html>  
<html>  
<head>  
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Google Hacking Tests</title>
<meta name="Description" content="Google Hacking Tests - A free online collection of network and website penetration testing tools including port scan, information gathering, ping, traceout, DNS Lookup, Reverse Lookup, Whois Record, Proxy Checker, IP Location, IP Detail" />
<meta name="Keywords" content="google hacking tests, online network tools, online hacking tests"/>
<script src="js/jquery.js"></script>
<script src="js/jquery.easyui.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>Google Hacking Tests</h2>

<div>
      <h3>How vulnerable is your website in a Search Engine</h3>

      <input type="text" name="txtUrl" id="txtUrl" placeholder="Domain name or IP">

        <ul>
        <li><p><a href="javascript:google_hacking_tests(1);" class="button" style="width:200px">Directory Listing Vulnerabilities</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(2);" class="button" style="width:200px">Configuration File Exposed</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(3);" class="button" style="width:200px">Database Files Exposed</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(4);" class="button" style="width:200px">Log Files Exposed</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(5);" class="button" style="width:200px">Backup and old Files</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(6);" class="button" style="width:200px">Login Pages</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(7);" class="button" style="width:200px">SQL Errors</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(8);" class="button" style="width:200px">Publicly Exposed Documents</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(9);" class="button" style="width:200px">phpinfo()</a></p></li>
        <li><p><a href="javascript:google_hacking_tests(10);" class="button" style="width:200px">Exposed CGI Files</a></p></li>
        </ul>
</div>

<script>
   function google_hacking_tests(type) {
        if( !$("#txtUrl").val() ){
            $.messager.alert('', "Please, enter either a domain name or IP address").window({  width:350, height:120 });
            return;
       }
       site = $("#txtUrl").val();
       if (site.indexOf('://') > 0) {
           site = site.substr(site.indexOf('://') + 3);
       }
       url = 'https://www.google.com/search?q=';
       url += 'site:' + site;
       switch(type)
       {
           case 1:
               url += '+intitle:index.of';
               break;
           case 2:
               url += '+ext:xml+|+ext:conf+|+ext:cnf+|+ext:reg+|+ext:inf+|+ext:rdp+|+ext:cfg+|+ext:txt+|+ext:ora+|+ext:ini';
               break;
           case 3:
               url += '+ext:sql+|+ext:dbf+|+ext:mdb';
               break;
           case 4:
               url += '+ext:log';
               break;
           case 5:
               url += '+ext:bkf+|+ext:bkp+|+ext:bak+|+ext:old+|+ext:backup';
               break;
           case 6:
               url += '+inurl:login';
               break;
           case 7:
               url += '+intext:"sql+syntax+near"+|+intext:"syntax+error+has+occurred"+|+intext:"incorrect+syntax+near"+|+intext:"unexpected+end+of+SQL+command"+|+intext:"Warning:+mysql_connect()"+|+intext:"Warning:+mysql_query()"+|+intext:"Warning:+pg_connect()"';
               break;
           case 8:
               url += '+ext:doc+|+ext:docx+|+ext:odt+|+ext:pdf+|+ext:rtf+|+ext:sxw+|+ext:psw+|+ext:ppt+|+ext:pptx+|+ext:pps+|+ext:csv';
               break;
           case 9:
               url += '+ext:php+intitle:phpinfo+"published+by+the+PHP+Group"';
               break;
           case 10:
               url += '+ext:cgi';
               break;
       }
       window.open(url,'Google Hacking Test','scrollbars=yes,menubar=no,height=600,width=800,resizable=yes,toolbar=yes,menubar=no,location=no,status=no');
   }
  $("#loading").css({"visibility":"hidden"});
  $("body#cc").css({"visibility":"visible"});
</script>

</body>

<?php
include 'footer.php';
?>
