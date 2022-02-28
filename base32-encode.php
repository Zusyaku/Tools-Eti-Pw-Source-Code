<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Base32 encoder. Base32 online encode function.">
<meta name="keywords" content="Base32 encode online, Base32 encoder, Base32 converter, base32, base32 encode, online base32 encode">
<title>Base32 Encode Online</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
<!-- <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script> -->
<script src="js/jquery-1.8.0.min.js"></script>

</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Base32 Encoder</h2>

<br />

<script>
;(function($, window, document, undefined) {
  window.method = null;

  $(document).ready(function() {
    var input = $('#input');
    var output = $('#output');
    var checkbox = $('#auto-update');
    var dropzone = $('#droppable-zone');
    var option = $('[data-option]');

    var execute = function() {
      try {
        output.val(method(input.val(), option.val()));
      } catch(e) {
        output.val(e);
      }
    }

    function autoUpdate() {
      if(!checkbox[0].checked) {
        return;
      }
      execute();
    }

    if(checkbox.length > 0) {
      input.bind('input propertychange', autoUpdate);
      option.bind('input propertychange', autoUpdate);
      checkbox.click(autoUpdate);
    }

    if(dropzone.length > 0) {
      var dropzonetext = $('#droppable-zone-text');

      $(document.body).bind('dragover drop', function(e) {
        e.preventDefault();
        return false;
      });

      if(!window.FileReader) {
        dropzonetext.text('Your browser does not support.');
        $('input').attr('disabled', true);
        return;
      }

      dropzone.bind('dragover', function() {
        dropzone.addClass('hover');
      });

      dropzone.bind('dragleave', function() {
        dropzone.removeClass('hover');
      });

      dropzone.bind('drop', function(e) {
        dropzone.removeClass('hover');
        file = e.originalEvent.dataTransfer.files[0];
        dropzonetext.text(file.name);
        autoUpdate();
      });

      input.bind('change', function() {
        file = input[0].files[0];
        dropzonetext.text(file.name);
        autoUpdate();
      });

      var file;
      execute = function() {
        reader = new FileReader();
        var value = option.val();
        if (method.update) {
          var batch = 1024 * 1024 * 2;
          var start = 0;
          var total = file.size;
          var current = method;
          reader.onload = function (event) {
            try {
              current = current.update(event.target.result, value);
              asyncUpdate();
            } catch(e) {
              output.val(e);
            }
          };
          var asyncUpdate = function () {
            if (start < total) {
              output.val('hashing...' + (start / total * 100).toFixed(2) + '%');
              var end = Math.min(start + batch, total);
              reader.readAsArrayBuffer(file.slice(start, end));
              start = end;
            } else {
              output.val(current.hex());
            }
          };
          asyncUpdate();
        } else {
          output.val('hashing...');
          reader.onload = function (event) {
            try {
              output.val(method(event.target.result, value));
            } catch (e) {
              output.val(e);
            }
          };
          reader.readAsArrayBuffer(file);
        }
      };
    }

    $('#execute').click(execute);

    var parts = location.pathname.split('/');
    $('a[href="' + parts[parts.length - 1] + '"]').addClass('active');
  });
})(jQuery, window, document);
</script>

          <textarea rows="8" cols="46" id="input" placeholder="Input"></textarea><br>
          <input id="execute" type="submit" class="button" value="Encode"><br>
          <textarea rows="8" cols="46" id="output" placeholder="Output" readonly></textarea>

<script>/*
 * [hi-base32]{@link https://github.com/emn178/hi-base32}
 *
 * @version 0.5.0
 * @author Chen, Yi-Cyuan [emn178@gmail.com]
 * @copyright Chen, Yi-Cyuan 2015-2018
 * @license MIT
 */
!function(){"use strict";var r="object"==typeof window?window:{};!r.HI_BASE32_NO_NODE_JS&&"object"==typeof process&&process.versions&&process.versions.node&&(r=global);var t=!r.HI_BASE32_NO_COMMON_JS&&"object"==typeof module&&module.exports,a="function"==typeof define&&define.amd,e="ABCDEFGHIJKLMNOPQRSTUVWXYZ234567".split(""),o={A:0,B:1,C:2,D:3,E:4,F:5,G:6,H:7,I:8,J:9,K:10,L:11,M:12,N:13,O:14,P:15,Q:16,R:17,S:18,T:19,U:20,V:21,W:22,X:23,Y:24,Z:25,2:26,3:27,4:28,5:29,6:30,7:31},h=[0,0,0,0,0,0,0,0],c=function(r,t){t.length>10&&(t="..."+t.substr(-10));var a=new Error("Decoded data is not valid UTF-8. Maybe try base32.decode.asBytes()? Partial data after reading "+r+" bytes: "+t+" <-");throw a.position=r,a},n=function(r){if(!/^[A-Z2-7=]+$/.test(r))throw new Error("Invalid base32 characters");for(var t,a,e,h,c,n,A,d,C=[],i=0,f=(r=r.replace(/=/g,"")).length,s=0,g=f>>3<<3;s<g;)t=o[r.charAt(s++)],a=o[r.charAt(s++)],e=o[r.charAt(s++)],h=o[r.charAt(s++)],c=o[r.charAt(s++)],n=o[r.charAt(s++)],A=o[r.charAt(s++)],d=o[r.charAt(s++)],C[i++]=255&(t<<3|a>>>2),C[i++]=255&(a<<6|e<<1|h>>>4),C[i++]=255&(h<<4|c>>>1),C[i++]=255&(c<<7|n<<2|A>>>3),C[i++]=255&(A<<5|d);var u=f-g;return 2===u?(t=o[r.charAt(s++)],a=o[r.charAt(s++)],C[i++]=255&(t<<3|a>>>2)):4===u?(t=o[r.charAt(s++)],a=o[r.charAt(s++)],e=o[r.charAt(s++)],h=o[r.charAt(s++)],C[i++]=255&(t<<3|a>>>2),C[i++]=255&(a<<6|e<<1|h>>>4)):5===u?(t=o[r.charAt(s++)],a=o[r.charAt(s++)],e=o[r.charAt(s++)],h=o[r.charAt(s++)],c=o[r.charAt(s++)],C[i++]=255&(t<<3|a>>>2),C[i++]=255&(a<<6|e<<1|h>>>4),C[i++]=255&(h<<4|c>>>1)):7===u&&(t=o[r.charAt(s++)],a=o[r.charAt(s++)],e=o[r.charAt(s++)],h=o[r.charAt(s++)],c=o[r.charAt(s++)],n=o[r.charAt(s++)],A=o[r.charAt(s++)],C[i++]=255&(t<<3|a>>>2),C[i++]=255&(a<<6|e<<1|h>>>4),C[i++]=255&(h<<4|c>>>1),C[i++]=255&(c<<7|n<<2|A>>>3)),C},A=function(r,t){if(!t)return function(r){for(var t,a,e="",o=r.length,h=0,n=0;h<o;)if((t=r[h++])<=127)e+=String.fromCharCode(t);else{t>191&&t<=223?(a=31&t,n=1):t<=239?(a=15&t,n=2):t<=247?(a=7&t,n=3):c(h,e);for(var A=0;A<n;++A)((t=r[h++])<128||t>191)&&c(h,e),a<<=6,a+=63&t;a>=55296&&a<=57343&&c(h,e),a>1114111&&c(h,e),a<=65535?e+=String.fromCharCode(a):(a-=65536,e+=String.fromCharCode(55296+(a>>10)),e+=String.fromCharCode(56320+(1023&a)))}return e}(n(r));if(!/^[A-Z2-7=]+$/.test(r))throw new Error("Invalid base32 characters");var a,e,h,A,d,C,i,f,s="",g=r.indexOf("=");-1===g&&(g=r.length);for(var u=0,S=g>>3<<3;u<S;)a=o[r.charAt(u++)],e=o[r.charAt(u++)],h=o[r.charAt(u++)],A=o[r.charAt(u++)],d=o[r.charAt(u++)],C=o[r.charAt(u++)],i=o[r.charAt(u++)],f=o[r.charAt(u++)],s+=String.fromCharCode(255&(a<<3|e>>>2))+String.fromCharCode(255&(e<<6|h<<1|A>>>4))+String.fromCharCode(255&(A<<4|d>>>1))+String.fromCharCode(255&(d<<7|C<<2|i>>>3))+String.fromCharCode(255&(i<<5|f));var m=g-S;return 2===m?(a=o[r.charAt(u++)],e=o[r.charAt(u++)],s+=String.fromCharCode(255&(a<<3|e>>>2))):4===m?(a=o[r.charAt(u++)],e=o[r.charAt(u++)],h=o[r.charAt(u++)],A=o[r.charAt(u++)],s+=String.fromCharCode(255&(a<<3|e>>>2))+String.fromCharCode(255&(e<<6|h<<1|A>>>4))):5===m?(a=o[r.charAt(u++)],e=o[r.charAt(u++)],h=o[r.charAt(u++)],A=o[r.charAt(u++)],d=o[r.charAt(u++)],s+=String.fromCharCode(255&(a<<3|e>>>2))+String.fromCharCode(255&(e<<6|h<<1|A>>>4))+String.fromCharCode(255&(A<<4|d>>>1))):7===m&&(a=o[r.charAt(u++)],e=o[r.charAt(u++)],h=o[r.charAt(u++)],A=o[r.charAt(u++)],d=o[r.charAt(u++)],C=o[r.charAt(u++)],i=o[r.charAt(u++)],s+=String.fromCharCode(255&(a<<3|e>>>2))+String.fromCharCode(255&(e<<6|h<<1|A>>>4))+String.fromCharCode(255&(A<<4|d>>>1))+String.fromCharCode(255&(d<<7|C<<2|i>>>3))),s},d={encode:function(r,t){var a="string"!=typeof r;return a&&r.constructor===ArrayBuffer&&(r=new Uint8Array(r)),a?function(r){for(var t,a,o,h,c,n="",A=r.length,d=0,C=5*parseInt(A/5);d<C;)t=r[d++],a=r[d++],o=r[d++],h=r[d++],c=r[d++],n+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[31&(o<<1|h>>>7)]+e[h>>>2&31]+e[31&(h<<3|c>>>5)]+e[31&c];var i=A-C;return 1===i?(t=r[d],n+=e[t>>>3]+e[t<<2&31]+"======"):2===i?(t=r[d++],a=r[d],n+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[a<<4&31]+"===="):3===i?(t=r[d++],a=r[d++],o=r[d],n+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[o<<1&31]+"==="):4===i&&(t=r[d++],a=r[d++],o=r[d++],h=r[d],n+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[31&(o<<1|h>>>7)]+e[h>>>2&31]+e[h<<3&31]+"="),n}(r):t?function(r){for(var t,a,o,h,c,n="",A=r.length,d=0,C=5*parseInt(A/5);d<C;)t=r.charCodeAt(d++),a=r.charCodeAt(d++),o=r.charCodeAt(d++),h=r.charCodeAt(d++),c=r.charCodeAt(d++),n+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[31&(o<<1|h>>>7)]+e[h>>>2&31]+e[31&(h<<3|c>>>5)]+e[31&c];var i=A-C;return 1===i?(t=r.charCodeAt(d),n+=e[t>>>3]+e[t<<2&31]+"======"):2===i?(t=r.charCodeAt(d++),a=r.charCodeAt(d),n+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[a<<4&31]+"===="):3===i?(t=r.charCodeAt(d++),a=r.charCodeAt(d++),o=r.charCodeAt(d),n+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[o<<1&31]+"==="):4===i&&(t=r.charCodeAt(d++),a=r.charCodeAt(d++),o=r.charCodeAt(d++),h=r.charCodeAt(d),n+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[31&(o<<1|h>>>7)]+e[h>>>2&31]+e[h<<3&31]+"="),n}(r):function(r){var t,a,o,c,n,A,d,C=!1,i="",f=0,s=0,g=r.length;do{for(h[0]=h[5],h[1]=h[6],h[2]=h[7],d=s;f<g&&d<5;++f)(A=r.charCodeAt(f))<128?h[d++]=A:A<2048?(h[d++]=192|A>>6,h[d++]=128|63&A):A<55296||A>=57344?(h[d++]=224|A>>12,h[d++]=128|A>>6&63,h[d++]=128|63&A):(A=65536+((1023&A)<<10|1023&r.charCodeAt(++f)),h[d++]=240|A>>18,h[d++]=128|A>>12&63,h[d++]=128|A>>6&63,h[d++]=128|63&A);s=d-5,f===g&&++f,f>g&&d<6&&(C=!0),t=h[0],d>4?(a=h[1],o=h[2],c=h[3],n=h[4],i+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[31&(o<<1|c>>>7)]+e[c>>>2&31]+e[31&(c<<3|n>>>5)]+e[31&n]):1===d?i+=e[t>>>3]+e[t<<2&31]+"======":2===d?(a=h[1],i+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[a<<4&31]+"===="):3===d?(a=h[1],o=h[2],i+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[o<<1&31]+"==="):(a=h[1],o=h[2],c=h[3],i+=e[t>>>3]+e[31&(t<<2|a>>>6)]+e[a>>>1&31]+e[31&(a<<4|o>>>4)]+e[31&(o<<1|c>>>7)]+e[c>>>2&31]+e[c<<3&31]+"=")}while(!C);return i}(r)},decode:A};A.asBytes=n,t?module.exports=d:(r.base32=d,a&&define(function(){return d}))}();</script>
<script>method = base32.encode;</script><br>

<br>
Base32 converter – Encode and Decode online<br>
<br>
Base32 is a transfer encoding using a 32-character set, which can be beneficial when dealing with case-insensitive filesystems,<br> 
spoken language or human memory.
<br>

<?php
include 'footer.php';
?>
