#!/usr/bin/env php
<?php

$OZXrRtm = ["\142\x6c\x75\145" => "\x1b\133\x33\64\155", "\154\122\145\x64" => "\33\133\71\x31\155", "\x72\x65\x73\145\x74" => "\33\133\63\x39\155", "\x6c\x43\x79\x61\x6e" => "\x1b\x5b\x39\x36\155", "\144\x47\162\x61\x79" => "\33\x5b\x39\60\155", "\x6c\107\162\x65\x65\156" => "\x1b\133\71\x32\155", "\x6c\131\145\x6c\x6c\x6f\x77" => "\x1b\x5b\x39\63\x6d", "\x6d\141\x67\x65\156\164\x61" => "\33\133\63\65\x6d"];
$MAk8dia = <<<BANNER
    %s__  __           __       ______                __   _
   / / / /___ ______/ /_     / ____/________ ______/ /__(_)___  ____ _
  / /_/ / __ `/ ___/ __ \\   / /   / ___/ __ `/ ___/ //_/ / __ \\/ __ `/
 / __  / /_/ (__  ) / / /  / /___/ /  / /_/ / /__/ ,< / / / / / /_/ /
/_/ /_/\\__,_/____/_/ /_/   \\____/_/   \\__,_/\\___/_/|_/_/_/ /_/\\__, /
>> %sCRACK AND CHECK HASH TYPES IN BULK        %s©22XploiterCrew™%s/____/%s%s
BANNER;
printf($MAk8dia, $OZXrRtm["\x6c\x43\x79\141\156"], $OZXrRtm["\x6c\x59\x65\154\154\x6f\167"], $OZXrRtm["\144\x47\162\141\x79"], $OZXrRtm["\x6c\x43\171\141\x6e"], $OZXrRtm["\162\x65\163\145\164"], "\12\12");
$XIniYkT = hash_algos();
$L_zJ3ia = readline("\x48\141\163\x68\x20\x20\40\x20\40\40\40\x20\x20\40\x20\72\x20");
$L_zJ3ia = preg_split("\x2f\133\x2c\x5c\x73\135\x2b\57", $L_zJ3ia);
$rdnCOk_ = readline("\x57\x6f\162\144\x6c\151\x73\x74\x20\x66\151\154\145\x20\x20\72\40") ?: "\167\x6f\x72\144\154\151\163\x74\57\x77\157\162\144\x6c\151\163\164\x2d\61\x2e\x74\170\x74";
if (empty($L_zJ3ia[0])) {
	goto imzYIM5;
}
if (!is_array($L_zJ3ia)) {
	goto QHwIf61;
}
goto mL0JgfP;
imzYIM5:
die("\133{$OZXrRtm["\154\122\x65\x64"]}\x21{$OZXrRtm["\162\145\163\x65\164"]}\x5d\x20\124\x68\145\x20\x68\141\x73\x68\x20\x74\x6f\40\142\145\40\143\162\x61\x63\x6b\x65\x64\40\150\141\x73\x20\156\x6f\x74\40\142\x65\145\156\x20\163\x65\x74\xa");
goto mL0JgfP;
QHwIf61:
$L_zJ3ia = [$L_zJ3ia];
mL0JgfP:
$rdnCOk_ = file_get_contents(getcwd() . "\57{$rdnCOk_}");
$rdnCOk_ = preg_split("\x2f\xd\12\x7c\12\57", $rdnCOk_);
$rdnCOk_ = array_filter($rdnCOk_);
$PkbKTcT = time();
$Cay65EU = 0;
$DWNFLX_ = 0;
print "\75\x3d\x3d\75\75\x3d\75\75\x3d\x3d\75\x3d\x3d\x3d\x3d\75\75\75\75\x3d\x3d\75\x3d\75\x3d\x3d\x3d\x3d\75\75\75\75\75\x3d\75\75\75\x3d\75\x3d\75\75\75\x3d\x3d\x3d\x3d\x3d\x3d\x3d\x3d\x3d\75\x3d\75\75\x3d\75\75\x3d\x3d\75\12";
print "\x53\x74\141\162\x74\x20\x63\x72\x61\143\153\x69\156\147\x20\x62\171\40\x75\x73\151\156\x67\40{$OZXrRtm["\154\x59\145\154\x6c\157\167"]}" . count($rdnCOk_) . "{$OZXrRtm["\x72\x65\163\145\x74"]}\40\x77\x6f\x72\x64\x28\x73\51\x20\x69\156\x20\167\x6f\x72\144\x6c\x69\x73\x74\40\146\x69\x6c\145\12";
print "\117\x75\164\160\165\164\72\12";
foreach ($L_zJ3ia as $F9eDwie) {
	foreach ($XIniYkT as $Af9yX0r) {
		foreach ($rdnCOk_ as $sYcGYF6 => $MvIsPmL) {
			if (hash($Af9yX0r, $MvIsPmL) == $F9eDwie) {
				goto nDzBTJ6;
			}
			if (count($rdnCOk_) == $sYcGYF6 + 1 and end($XIniYkT) == $Af9yX0r) {
				goto wPwSTgn;
			}
			goto xnxqlNK;
			goto yfi5gt2;
			nDzBTJ6:
			$DWNFLX_++;
			print "\x5b{$OZXrRtm["\154\x47\162\x65\x65\156"]}\342\234\x93{$OZXrRtm["\x72\145\x73\x65\x74"]}\135\40{$OZXrRtm["\x62\x6c\x75\145"]}" . strtoupper(str_replace("\x2d", '', $Af9yX0r)) . "{$OZXrRtm["\x72\x65\x73\145\164"]}\x20\x9{$F9eDwie}{$OZXrRtm["\x6c\103\x79\141\x6e"]}\72\72{$OZXrRtm["\162\145\163\145\x74"]}{$MvIsPmL}\12";
			goto NQP7TrW;
			goto yfi5gt2;
			wPwSTgn:
			$Cay65EU++;
			print "\133{$OZXrRtm["\154\x52\x65\x64"]}\130{$OZXrRtm["\x72\x65\163\145\164"]}\x5d\40{$OZXrRtm["\155\x61\147\x65\156\x74\141"]}\x55\x4e\x4b\x4e\117\x57\x4e{$OZXrRtm["\x72\145\x73\145\x74"]}\x20\x9{$F9eDwie}\12";
			goto NQP7TrW;
			yfi5gt2:
			xnxqlNK:
		}
		d13d8_z:
		nUzNqAT:
	}
	KewIfeO:
	NQP7TrW:
}
i2HlnPR:
if (!($DWNFLX_ > 0)) {
	goto j2e71rw;
}
print "{$OZXrRtm["\x64\107\x72\x61\171"]}\x4e\102\x3a\x20\x41\114\x47\117\x20\x48\101\x53\110\72\x3a\127\117\x52\104{$OZXrRtm["\x72\145\163\145\x74"]}\12";
j2e71rw:
print "\12";
print "\105\x72\162\x6f\x72\x20\143\162\x61\143\x6b\40{$OZXrRtm["\x6c\122\x65\144"]}" . $Cay65EU . "{$OZXrRtm["\x72\x65\163\145\x74"]}\x20\150\141\163\x68\12";
print "\123\x75\x63\x63\x65\163\163\146\x75\154\154\171\40\x63\162\x61\143\153\40{$OZXrRtm["\154\107\162\x65\145\156"]}" . $DWNFLX_ . "{$OZXrRtm["\x72\x65\x73\145\x74"]}\x20\x68\x61\163\150\xa";
print "\124\x69\x6d\145\40\165\x73\x65\144\72\40" . (time() - $PkbKTcT) . "\40\x73\145\x63\157\156\x64\xa";