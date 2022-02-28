<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Find out Whois...">
<meta name="keywords" content="whois, who is, online tools, free online tools, web tools, online tools with source code, tools, webmaster tools">
<title>Who is</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Who is</h2>

<?php
$domain = $_GET['domain'];
$whoisservers = array(
	"ac" =>"whois.nic.ac",
        "academy" =>"whois.donuts.co",
        "actor" =>"whois.unitedtld.com",
	"ae" =>"whois.nic.ae",
        "ae" =>"whois.aeda.net.ae",
	"aero" =>"whois.aero",
	"af" =>"whois.nic.af",
	"ag" =>"whois.nic.ag",
        "agency" =>"whois.donuts.co",
        "ai" =>"whois.ai",
	"al" =>"whois.ripe.net",
	"am" =>"whois.amnic.net",
	"arpa" =>"whois.iana.org",
        "archi" =>"whois.ksregistry.net",
	"as" =>"whois.nic.as",
	"asia" =>"whois.nic.asia",
        "associates" =>"whois.donuts.co",
	"at" =>"whois.nic.at",
	"au" =>"whois.aunic.net",
        "au" =>"whois.audns.net.au",
        "aw" =>"whois.nic.aw",
        "ax" =>"whois.ax",
        "az" =>"whois.az",
	"az" =>"whois.ripe.net",
	"ba" =>"whois.ripe.net",
        "bar" =>"whois.nic.bar",
        "bargains" =>"whois.donuts.co",
	"be" =>"whois.dns.be",
        "berlin" =>"whois.nic.berlin",
	"bg" =>"whois.register.bg",
	"bi" =>"whois.nic.bi",
        "bi" =>"whois1.nic.bi",
        "bike" =>"whois.donuts.co",
	"biz" =>"whois.biz",
	"bj" =>"whois.nic.bj",
        "blackfriday" =>"whois.uniregistry.net",
        "bn" =>"whois.bn",
        "boutique" =>"whois.donuts.co",
        "build" =>"whois.nic.build",
        "builders" =>"whois.donuts.co",
	"br" =>"whois.registro.br",
	"bt" =>"whois.netnames.net",
	"by" =>"whois.ripe.net",
        "by" =>"whois.cctld.by",
        "bw" =>"whois.nic.net.bw",
	"bz" =>"whois.belizenic.bz",
	"ca" =>"whois.cira.ca",
        "cab" =>"whois.donuts.co",
        "camera" =>"whois.donuts.co",
        "camp" =>"whois.donuts.co",
        "captial" =>"whois.donuts.co",
        "cards" =>"whois.donuts.co",
        "careers" =>"whois.donuts.co",
	"cat" =>"whois.cat",
	"cc" =>"whois.nic.cc",
	"cd" =>"whois.nic.cd",
	"ch" =>"whois.nic.ch",
	"ci" =>"whois.nic.ci",
	"ck" =>"whois.nic.ck",
	"cl" =>"whois.nic.cl",
	"cn" =>"whois.cnnic.net.cn",
	"com" =>"whois.verisign-grs.com",
        "computer" =>"whois.donuts.co",
	"coop" =>"whois.nic.coop",
        "co.uk" =>"whois.nic.uk",
	"cx" =>"whois.nic.cx",
	"cy" =>"whois.ripe.net",
	"cz" =>"whois.nic.cz",
	"de" =>"whois.denic.de",
	"dk" =>"whois.dk-hostmaster.dk",
	"dm" =>"whois.nic.cx",
	"dz" =>"whois.ripe.net",
	"edu" =>"whois.educause.edu",
	"ee" =>"whois.eenet.ee",
	"eg" =>"whois.ripe.net",
	"es" =>"whois.ripe.net",
	"eu" =>"whois.eu",
	"fi" =>"whois.ficora.fi",
	"fo" =>"whois.ripe.net",
	"fr" =>"whois.nic.fr",
	"gb" =>"whois.ripe.net",
	"gd" =>"whois.adamsnames.com",
	"ge" =>"whois.ripe.net",
	"gg" =>"whois.channelisles.net",
	"gi" =>"whois2.afilias-grs.net",
	"gl" =>"whois.ripe.net",
	"gm" =>"whois.ripe.net",
	"gov" =>"whois.nic.gov",
	"gr" =>"whois.ripe.net",
	"gs" =>"whois.nic.gs",
	"gw" =>"whois.nic.gw",
	"gy" =>"whois.registry.gy",
	"hk" =>"whois.hkirc.hk",
	"hm" =>"whois.registry.hm",
	"hn" =>"whois2.afilias-grs.net",
	"hr" =>"whois.ripe.net",
	"hu" =>"whois.nic.hu",
	"ie" =>"whois.domainregistry.ie",
	"il" =>"whois.isoc.org.il",
	"in" =>"whois.inregistry.net",
	"info" =>"whois.afilias.net",
	"int" =>"whois.iana.org",
	"io" =>"whois.nic.io",
	"iq" =>"vrx.net",
	"ir" =>"whois.nic.ir",
	"is" =>"whois.isnic.is",
	"it" =>"whois.nic.it",
	"je" =>"whois.channelisles.net",
	"jobs" =>"jobswhois.verisign-grs.com",
	"jp" =>"whois.jprs.jp",
	"ke" =>"whois.kenic.or.ke",
	"kg" =>"www.domain.kg",
	"ki" =>"whois.nic.ki",
	"kr" =>"whois.nic.or.kr",
	"kz" =>"whois.nic.kz",
	"la" =>"whois.nic.la",
	"li" =>"whois.nic.li",
	"lt" =>"whois.domreg.lt",
	"lu" =>"whois.dns.lu",
	"lv" =>"whois.nic.lv",
	"ly" =>"whois.nic.ly",
	"ma" =>"whois.iam.net.ma",
	"mc" =>"whois.ripe.net",
	"md" =>"whois.ripe.net",
	"me" =>"whois.meregistry.net",
	"mg" =>"whois.nic.mg",
	"mil" =>"whois.nic.mil",
	"mn" =>"whois.nic.mn",
	"mobi" =>"whois.dotmobiregistry.net",
	"ms" =>"whois.adamsnames.tc",
	"mt" =>"whois.ripe.net",
	"mu" =>"whois.nic.mu",
	"museum" =>"whois.museum",
	"mx" =>"whois.nic.mx",
	"my" =>"whois.mynic.net.my",
	"na" =>"whois.na-nic.com.na",
	"name" =>"whois.nic.name",
	"net" =>"whois.verisign-grs.net",
	"nf" =>"whois.nic.nf",
	"nl" =>"whois.domain-registry.nl",
	"no" =>"whois.norid.no",
	"nu" =>"whois.nic.nu",
	"nz" =>"whois.srs.net.nz",
	"org" =>"whois.pir.org",
	"pl" =>"whois.dns.pl",
	"pm" =>"whois.nic.pm",
	"pr" =>"whois.uprr.pr",
	"pro" =>"whois.registrypro.pro",
	"pt" =>"whois.dns.pt",
        "pw" =>"whois.nic.pw",
	"re" =>"whois.nic.re",
        "ryukyu" =>"whois.nic.ryukyu",
	"ro" =>"whois.rotld.ro",
	"ru" =>"whois.ripn.net",
	"sa" =>"whois.nic.net.sa",
	"sb" =>"whois.nic.net.sb",
	"sc" =>"whois2.afilias-grs.net",
	"se" =>"whois.iis.se",
	"sg" =>"whois.nic.net.sg",
	"sh" =>"whois.nic.sh",
	"si" =>"whois.arnes.si",
	"sk" =>"whois.ripe.net",
	"sm" =>"whois.ripe.net",
	"st" =>"whois.nic.st",
	"su" =>"whois.ripn.net",
	"tc" =>"whois.adamsnames.tc",
	"tel" =>"whois.nic.tel",
	"tf" =>"whois.nic.tf",
	"th" =>"whois.thnic.net",
	"tj" =>"whois.nic.tj",
	"tk" =>"whois.dot.tk",
	"tl" =>"whois.nic.tl",
	"tm" =>"whois.nic.tm",
	"tn" =>"whois.ripe.net",
	"to" =>"whois.tonic.to",
	"tp" =>"whois.nic.tl",
	"tr" =>"whois.nic.tr",
	"travel" =>"whois.nic.travel",
	"tv" => "tvwhois.verisign-grs.com",
	"tw" =>"whois.twnic.net.tw",
	"ua" =>"whois.net.ua",
	"ug" =>"whois.co.ug",
	"uk" =>"whois.nic.uk",
	"us" =>"whois.nic.us",
	"uy" =>"nic.uy",
	"uz" =>"whois.cctld.uz",
	"va" =>"whois.ripe.net",
	"vc" =>"whois2.afilias-grs.net",
	"ve" =>"whois.nic.ve",
	"vg" =>"whois.adamsnames.tc",
	"wf" =>"whois.nic.wf",
	"ws" =>"whois.website.ws",
        "xyz" =>"whois.nic.xyz",
        "xxx" =>"whois.nic.xxx",
	"yt" =>"whois.nic.yt",
	"yu" =>"whois.ripe.net",
        "zone" =>"whois.donuts.co",
        "cat" =>"whois.cat",
        "catering" =>"whois.donuts.co",
//other list - with same - some duplicate
        "cc" =>"ccwhois.verisign-grs.com",
        "center" =>"whois.donuts.co",
        "ceo" =>"whois.nic.ceo",
        "cf" =>"whois.dot.cf",
        "ch" =>"whois.nic.ch",
        "cheap" =>"whois.donuts.co",
        "christmas" =>"whois.uniregistry.net",
        "ci" =>"whois.nic.ci",
        "cl" =>"whois.nic.cl",
        "cleaning" =>"whois.donuts.co",
        "clothing" =>"whois.donuts.co",
        "club" =>"whois.nic.club",
        "cn" =>"whois.cnnic.cn",
        "co" =>"whois.nic.co",
        "codes" =>"whois.donuts.co",
        "coffee" =>"whois.donuts.co",
        "college" =>"whois.centralnic.com",
        "cologne" =>"whois-fe1.pdt.cologne.tango.knipp.de",
        "community" =>"whois.donuts.co",
        "company" =>"whois.donuts.co",
        "construction" =>"whois.donuts.co",
        "contractors" =>"whois.donuts.co",
        "cooking" =>"whois-dub.mm-registry.com",
        "cool" =>"whois.donuts.co",
        "coop" =>"whois.nic.coop",
        "country" =>"whois-dub.mm-registry.com",
        "cruises" =>"whois.donuts.co",
        "cx" =>"whois.nic.cx",
        "cz" =>"whois.nic.cz",
        "dating" =>"whois.donuts.co",
        "de" =>"whois.denic.de",
        "democrat" =>"whois.unitedtld.com",
        "desi" =>"whois.ksregistry.net",
        "diamonds" =>"whois.donuts.co",
        "directory" =>"whois.donuts.co",
        "dk" =>"whois.dk-hostmaster.dk",
        "dm" =>"whois.nic.dm",
        "domains" =>"whois.donuts.co",
        "dz" =>"whois.nic.dz",
        "ec" =>"whois.nic.ec",
        "edu" =>"whois.educause.edu",
        "education" =>"whois.donuts.co",
        "ee" =>"whois.tld.ee",
        "email" =>"whois.donuts.co",
        "engineering" =>"whois.donuts.co",
        "enterprises" =>"whois.donuts.co",
        "equipment" =>"whois.donuts.co",
        "es" =>"whois.nic.es",
        "estate" =>"whois.donuts.co",
        "eus" =>"whois.eus.coreregistry.net",
        "events" =>"whois.donuts.co",
        "expert" =>"whois.donuts.co",
        "exposed" =>"whois.donuts.co",
        "farm" =>"whois.donuts.co",
        "feedback" =>"whois.centralnic.com",
        "fi" =>"whois.fi",
        "fish" =>"whois.donuts.co",
        "fishing" =>"whois-dub.mm-registry.com",
        "flights" =>"whois.donuts.co",
        "florist" =>"whois.donuts.co",
        "fo" =>"whois.nic.fo",
        "foo" =>"domain-registry-whois.l.google.com",
        "foundation" =>"whois.donuts.co",
        "fr" =>"whois.nic.fr",
        "frogans" =>"whois-frogans.nic.fr",
        "futbol" =>"whois.unitedtld.com",
        "ga" =>"whois.gal.coreregistry.net",
        "gal" =>"whois.donuts.co",
        "gd" =>"whois.nic.gd",
        "gg" =>"whois.gg",
        "gi" =>"whois2.afilias-grs.net",
        "gift" =>"whois.uniregistry.net",
        "gl" =>"whois.nic.gl",
        "glass" =>"whois.donuts.co",
        "gop" =>"whois-cl01.mm-registry.com",
        "gov" =>"whois.dotgov.gov",
        "graphics" =>"whois.donuts.co",
        "gripe" =>"whois.donuts.co",
        "gs" =>"whois.nic.gs",
        "guitars" =>"whois.uniregistry.net",
        "guru" =>"whois.donuts.co",
        "gy" =>"whois.registry.gy",
        "haus" =>"whois.unitedtld.com",
        "hk" =>"whois.hkirc.hk",
        "hn" =>"whois.nic.hn",
        "holiday" =>"whois.donuts.co",
        "horse" =>"whois-dub.mm-registry.com",
        "house" =>"whois.donuts.co",
        "hr" =>"whois.dns.hr",
        "ht" =>"whois.nic.ht",
        "hu" =>"whois.nic.hu",
        "id" =>"whois.pandi.or.id",
        "ie" =>"whois.domainregistry.ie",
        "il" =>"whois.isoc.org.il",
        "im" =>"whois.nic.im",
        "immobilien" =>"whois.unitedtld.com",
        "in" =>"whois.inregistry.net",
        "industries" =>"whois.donuts.co",
        "institute" =>"whois.donuts.co",
        "int" =>"whois.iana.org",
        "international" =>"whois.donuts.co",
        "iq" =>"whois.cmc.iq",
        "ir" =>"whois.nic.ir",
        "is" =>"whois.isnic.is",
        "it" =>"whois.nic.it",
        "je" =>"whois.je",
        "jobs" =>"jobswhois.verisign-grs.com",
        "jp" =>"whois.jprs.jp",
        "kaufen" =>"whois.unitedtld.com",
        "ke" =>"whois.kenic.or.ke",
        "kg" =>"whois.domain.kg",
        "ki" =>"whois.nic.ki",
        "kitchen" =>"whois.donuts.co",
        "kiwi" =>"whois.dot-kiwi.com",
        "koeln" =>"whois-fe1.pdt.koeln.tango.knipp.de",
        "kr" =>"whois.kr",
        "kz" =>"whois.nic.kz",
        "la" =>"whois.nic.la",
        "land" =>"whois.donuts.co",
        "lease" =>"whois.donuts.co",
        "li" =>"whois.nic.li",
        "lighting" =>"whois.donuts.co",
        "limo" =>"whois.donuts.co",
        "link" =>"whois.uniregistry.net",
        "london" =>"whois-lon.mm-registry.com",
        "lt" =>"whois.domreg.lt",
        "lu" =>"whois.dns.lu",
        "luxury" =>"whois.nic.luxury",
        "lv" =>"whois.nic.lv",
        "ly" =>"whois.nic.ly",
        "ma" =>"whois.iam.net.ma",
        "management" =>"whois.donuts.co",
        "mango" =>"whois.mango.coreregistry.net",
        "marketing" =>"whois.donuts.co",
        "md" =>"whois.nic.md",
        "me" =>"whois.nic.me",
        "media" =>"whois.donuts.co",
        "menu" =>"whois.nic.menu",
        "mg" =>"whois.nic.mg",
        "miami" =>"whois-dub.mm-registry.com",
        "mk" =>"whois.marnet.mk",
        "ml" =>"whois.dot.ml",
        "mn" =>"whois.nic.mn",
        "mo" =>"whois.monic.mo",
        "mobi" =>"whois.dotmobiregistry.net",
        "moda" =>"whois.unitedtld.com",
        "monash" =>"whois.nic.monash",
        "mp" =>"whois.nic.mp",
        "ms" =>"whois.nic.ms",
        "mu" =>"whois.nic.mu",
        "museum" =>"whois.museum",
        "mx" =>"whois.mx",
        "my" =>"whois.domainregistry.my",
        "na" =>"whois.na-nic.com.na",
        "name" =>"whois.nic.name",
        "nc" =>"whois.nc",
        "nf" =>"whois.nic.nf",
        "ng" =>"whois.nic.net.ng",
        "ninja" =>"whois.unitedtld.com",
        "nl" =>"whois.domain-registry.nl",
        "no" =>"whois.norid.no",
        "nu" =>"whois.iis.nu",
        "nz" =>"whois.srs.net.nz",
        "om" =>"whois.registry.om",
        "onl" =>"whois.afilias-srs.net",
        "paris" =>"whois-paris.nic.fr",
        "partners" =>"whois.donuts.co",
        "parts" =>"whois.donuts.co",
        "pe" =>"kero.yachay.pe",
        "pf" =>"whois.registry.pf",
        "photo" =>"whois.uniregistry.net",
        "photography" =>"whois.donuts.co",
        "photos" =>"whois.donuts.co",
        "pics" =>"whois.uniregistry.net",
        "pictures" =>"whois.donuts.co",
        "pl" =>"whois.dns.pl",
        "plumbing" =>"whois.donuts.co",
        "pm" =>"whois.nic.pm",
        "post" =>"whois.dotpostregistry.net",
        "pr" =>"whois.nic.pr",
        "pro" =>"whois.dotproregistry.net",
        "productions" =>"whois.donuts.co",
        "properties" =>"whois.donuts.co",
        "pt" =>"whois.dns.pt",
        "pub" =>"whois.unitedtld.com",
        "pw" =>"whois.nic.pw",
        "qa" =>"whois.registry.qa",
        "quebec" =>"whois.quebec.rs.corenic.net",
        "re" =>"whois.nic.re",
        "recipes" =>"whois.donuts.co",
        "reisen" =>"whois.donuts.co",
        "rentals" =>"whois.donuts.co",
        "repair" =>"whois.donuts.co",
        "report" =>"whois.donuts.co",
        "rest" =>"whois.centralnic.com",
        "reviews" =>"whois.unitedtld.com",
        "rich" =>"whois.afilias-srs.net",
        "ro" =>"whois.rotld.ro",
        "rocks" =>"whois.unitedtld.com",
        "rodeo" =>"whois-dub.mm-registry.com",
        "rs" =>"whois.rnids.rs",
        "ru" =>"whois.tcinet.ru",
        "ruhr" =>"whois.nic.ruhr",
        "sa" =>"whois.nic.net.sa",
        "saarland" =>"whois.ksregistry.net",
        "sb" =>"whois.nic.net.sb",
        "sc" =>"whois2.afilias-grs.net",
        "se" =>"whois.iis.se",
        "services" =>"whois.donuts.co",
        "sexy" =>"whois.uniregistry.net",
        "sg" =>"whois.sgnic.sg",
        "sh" =>"whois.nic.sh",
        "shoes" =>"whois.donuts.co",
        "si" =>"whois.arnes.si",
        "singles" =>"whois.donuts.co",
        "sk" =>"whois.sk-nic.sk",
        "sm" =>"whois.nic.sm",
        "sn" =>"whois.nic.sn",
        "so" =>"whois.nic.so",
        "social" =>"whois.unitedtld.com",
        "solar" =>"whois.donuts.co",
        "solutions" =>"whois.donuts.co",
        "soy" =>"domain-registry-whois.l.google.com",
        "st" =>"whois.nic.st",
        "su" =>"whois.tcinet.ru",
        "supplies" =>"whois.donuts.co",
        "supply" =>"whois.donuts.co",
        "support" =>"whois.donuts.co",
        "sx" =>"whois.sx",
        "sy" =>"whois.tld.sy",
        "systems" =>"whois.donuts.co",
        "tattoo" =>"whois.uniregistry.net",
        "tc" =>"whois.meridiantld.net",
        "technology" =>"whois.donuts.co",
        "tel" =>"whois.nic.tel",
        "tf" =>"whois.nic.tf",
        "th" =>"whois.thnic.co.th",
        "tienda" =>"whois.donuts.co",
        "tips" =>"whois.donuts.co",
        "tk" =>"whois.dot.tk",
        "tl" =>"whois.nic.tl",
        "tm" =>"whois.nic.tm",
        "tn" =>"whois.ati.tn",
        "to" =>"whois.tonic.to",
        "today" =>"whois.donuts.co",
        "tools" =>"whois.donuts.co",
        "town" =>"whois.donuts.co",
        "toys" =>"whois.donuts.co",
        "tr" =>"whois.nic.tr",
        "training" =>"whois.donuts.co",
        "travel" =>"whois.nic.travel",
        "tv" =>"tvwhois.verisign-grs.com",
        "tw" =>"whois.twnic.net.tw",
        "tz" =>"whois.tznic.or.tz",
        "ua" =>"whois.ua",
        "ug" =>"whois.co.ug",
        "uk" =>"whois.nic.uk",
        "university" =>"whois.donuts.co",
        "us" =>"whois.nic.us",
        "uy" =>"whois.nic.org.uy",
        "black" =>"whois.afilias.net",
        "blue" =>"whois.afilias.net",
        "info" =>"whois.afilias.net",
        "kim" =>"whois.afilias.net",
        "pink" =>"whois.afilias.net",
        "red" =>"whois.afilias.net",
        "shiksha" =>"whois.afilias.net",
        "uz" =>"whois.cctld.uz",
        "vacations" =>"whois.donuts.co",
        "vc" =>"whois2.afilias-grs.net",
        "ve" =>"whois.nic.ve",
        "vegas" =>"whois.afilias-srs.net",
        "ventures" =>"whois.donuts.co",
        "vg" =>"ccwhois.ksregistry.net",
        "viajes" =>"whois.donuts.co",
        "villas" =>"whois.donuts.co",
        "vision" =>"whois.donuts.co",
        "vodka" =>"whois-dub.mm-registry.com",
        "voting" =>"whois.voting.tld-box.at",
        "voyage" =>"whois.donuts.co",
        "vu" =>"vunic.vu",
        "wang" =>"whois.gtld.knet.cn",
        "watch" =>"whois.donuts.co",
        "wed" =>"whois.nic.wed",
        "wf" =>"whois.nic.wf",
        "wien" =>"whois.nic.wien",
        "wiki" =>"whois.nic.wiki",
        "works" =>"whois.donuts.co",
        "zm" =>"whois.nic.zm");

function LookupDomain($domain){
	global $whoisservers;
	$domain_parts = explode(".", $domain);
	$tld = strtolower(array_pop($domain_parts));
	$whoisserver = $whoisservers[$tld];
	if(!$whoisserver) {
		return "Error: No appropriate Whois server found for $domain domain!";
	}
	$result = QueryWhoisServer($whoisserver, $domain);
	if(!$result) {
		return "Error: No results retrieved from $whoisserver server for $domain domain!";
	}
	else {
		while(strpos($result, "Whois Server:") !== FALSE){
			preg_match("/Whois Server: (.*)/", $result, $matches);
			$secondary = $matches[1];
			if($secondary) {
				$result = QueryWhoisServer($secondary, $domain);
				$whoisserver = $secondary;
			}
		}
	}
	return "$domain domain lookup results from $whoisserver server:\n\n" . $result;
}

function LookupIP($ip) {
	$whoisservers = array(
		//"whois.afrinic.net", // Africa - returns timeout error :-(
		"whois.lacnic.net", // Latin America and Caribbean - returns data for ALL locations worldwide :-)
		"whois.apnic.net", // Asia/Pacific only
		"whois.arin.net", // North America only
		"whois.ripe.net" // Europe, Middle East and Central Asia only
	);
	$results = array();
	foreach($whoisservers as $whoisserver) {
		$result = QueryWhoisServer($whoisserver, $ip);
		if($result && !in_array($result, $results)) {
			$results[$whoisserver]= $result;
		}
	}
	$res = "RESULTS FOUND: " . count($results);
	foreach($results as $whoisserver=>$result) {
		$res .= "\n\n-------------\nLookup results for $ip from $whoisserver server:\n\n$result";
	}
	return $res;
}

function ValidateIP($ip) {
	$ipnums = explode(".", $ip);
	if(count($ipnums) != 4) {
		return false;
	}
	foreach($ipnums as $ipnum) {
		if(!is_numeric($ipnum) || ($ipnum > 255)) {
			return false;
		}
	}
	return $ip;
}

function ValidateDomain($domain) {
	if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
		return false;
	}
	return $domain;
}

function QueryWhoisServer($whoisserver, $domain) {
	$port = 43;
	$timeout = 10;
	$fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
	if($whoisserver == "whois.verisign-grs.com") $domain = "=".$domain; // whois.verisign-grs.com requires the equals sign ("=") or it returns any result containing the searched string.
	fputs($fp, $domain . "\r\n");
	$out = "";
	while(!feof($fp)){
		$out .= fgets($fp);
	}
	fclose($fp);

	$res = "";
	if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
		$rows = explode("\n", $out);
		foreach($rows as $row) {
			$row = trim($row);
			if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
				$res .= $row."\n";
			}
		}
	}
	return $res;
}
?>

<br>
<p><strong>Whois Lookup</strong></p>

<form action="<?=$_SERVER['PHP_SELF'];?>">
<p><b><label for="domain">Domain / IP Address:</label></b> <input type="text" name="domain" id="domain" value="<?=$domain;?>"> <input type="submit" class="button" value="Lookup"></p>
</form>

<?
if($domain) {
	$domain = trim($domain);
	if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
	if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
	if(ValidateIP($domain)) {
		$result = LookupIP($domain);
	}
	elseif(ValidateDomain($domain)) {
		$result = LookupDomain($domain);
	}
	else die("Invalid Input!");
	echo "<pre>\n" . $result . "\n</pre>\n";
}
?>

<?php
include 'footer.php';
?>
