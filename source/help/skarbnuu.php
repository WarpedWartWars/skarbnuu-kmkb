<?php
  $pagetitle = 'Skarbnuu Keyboard Layout';
  $pagename = 'Skarbnuu Keyboard Layout for Keyman';
  $pagestyle = <<<END
	th, td {
		padding: 1pt 12pt 1pt 0pt;
		text-align: left;
	}
	.hidden {
		display: none !important;
	}
	code {
		font-size: 10pt;
		font-weight: bold;
		padding: 4px;
	}
	/* KEYBOARD */
	table.k {
		font-family: "Georgia", "Times New Roman", serif;
		font-size: 16px;
		border-collapse: collapse;
		table-layout: fixed;
		width: 842px;
	}
	table.k td {
		padding: 2px;
		text-align: center;
		vertical-align: middle;
		height: 23px;
	}
	table.k td.t {
		border-top: solid 2px black;
	}
	table.k td.b {
		border-bottom: solid 2px black;
	}
	table.k td.t,
	table.k td.b {
		border-left: solid 2px black;
		border-right: solid 2px black;
	}
	table.k td.m {
		background: #ccc;
	}
	table.k td.d {
		background: #fd5;
	}
END;
  require_once('header.php');
?>
<table border="0" cellpadding="0" cellspacing="0" class="k">
	<tr>
		<td colspan="4" class="t">´</td>
		<td colspan="4" class="t">~</td>
		<td colspan="4" class="t">@</td>
		<td colspan="4" class="t">#</td>
		<td colspan="4" class="t">$</td>
		<td colspan="4" class="t">%</td>
		<td colspan="4" class="t">^</td>
		<td colspan="4" class="t">&</td>
		<td colspan="4" class="t">*</td>
		<td colspan="4" class="t">{</td>
		<td colspan="4" class="t">}</td>
		<td colspan="4" class="t">÷</td>
		<td colspan="4" class="t">×</td>
		<td colspan="8" class="t m"></td>
	</tr>
	<tr>
		<td colspan="4" class="b">`</td>
		<td colspan="4" class="b">1</td>
		<td colspan="4" class="b">2</td>
		<td colspan="4" class="b">3</td>
		<td colspan="4" class="b">4</td>
		<td colspan="4" class="b">5</td>
		<td colspan="4" class="b">6</td>
		<td colspan="4" class="b">7</td>
		<td colspan="4" class="b">8</td>
		<td colspan="4" class="b">9</td>
		<td colspan="4" class="b">0</td>
		<td colspan="4" class="b">-</td>
		<td colspan="4" class="b">+</td>
		<td colspan="8" class="b m">
			<span class="mac hidden">delete</span>
			<span class="other hidden">backspace</span>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="t m"></td>
		<td colspan="4" class="t">€</td>
		<td colspan="4" class="t">£</td>
		<td colspan="4" class="t">(</td>
		<td colspan="4" class="t">)</td>
		<td colspan="4" class="t">[</td>
		<td colspan="4" class="t">]</td>
		<td colspan="4" class="t">–</td>
		<td colspan="4" class="t">—</td>
		<td colspan="4" class="t">_</td>
		<td colspan="4" class="t">=</td>
		<td colspan="4" class="t">»</td>
		<td colspan="4" class="t">«</td>
		<td colspan="6" class="t">\</td>
	</tr>
	<tr>
		<td colspan="6" class="b m">tab</td>
		<td colspan="4" class="b">ꚋ</td>
		<td colspan="4" class="b">ԡ</td>
		<td colspan="4" class="b">є</td>
		<td colspan="4" class="b">р</td>
		<td colspan="4" class="b">т</td>
		<td colspan="4" class="b">е</td>
		<td colspan="4" class="b">у</td>
		<td colspan="4" class="b">и</td>
		<td colspan="4" class="b">о</td>
		<td colspan="4" class="b">п</td>
		<td colspan="4" class="b">›</td>
		<td colspan="4" class="b">‹</td>
		<td colspan="6" class="b">/</td>
	</tr>
	<tr>
		<td colspan="7" class="t m"></td>
		<td colspan="4" class="t">¡</td>
		<td colspan="4" class="t">¿</td>
		<td colspan="4" class="t">‚</td>
		<td colspan="4" class="t">‘</td>
		<td colspan="4" class="t">’</td>
		<td colspan="4" class="t">≈</td>
		<td colspan="4" class="t">≠</td>
		<td colspan="4" class="t">±</td>
		<td colspan="4" class="t">−</td>
		<td colspan="4" class="t">|</td>
		<td colspan="4" class="t">"</td>
		<td colspan="9" class="t m"></td>
	</tr>
	<tr>
		<td colspan="7" class="b m">caps lock</td>
		<td colspan="4" class="b">а</td>
		<td colspan="4" class="b">с</td>
		<td colspan="4" class="b">д</td>
		<td colspan="4" class="b">ф</td>
		<td colspan="4" class="b">я</td>
		<td colspan="4" class="b">х</td>
		<td colspan="4" class="b">і</td>
		<td colspan="4" class="b">к</td>
		<td colspan="4" class="b">л</td>
		<td colspan="4" class="b">:</td>
		<td colspan="4" class="b">'</td>
		<td colspan="9" class="b m">
			<span class="mac hidden">return</span>
			<span class="other hidden">enter</span>
		</td>
	</tr>
	<tr>
		<td colspan="9" class="t m"></td>
		<td colspan="4" class="t">;</td>
		<td colspan="4" class="t">.</td>
		<td colspan="4" class="t">„</td>
		<td colspan="4" class="t">“</td>
		<td colspan="4" class="t">”</td>
		<td colspan="4" class="t">⟨</td>
		<td colspan="4" class="t">⟩</td>
		<td colspan="4" class="t">&lt;</td>
		<td colspan="4" class="t">&gt;</td>
		<td colspan="4" class="t">!</td>
		<td colspan="11" class="t m"></td>
	</tr>
	<tr>
		<td colspan="9" class="b m">shift</td>
		<td colspan="4" class="b">ꙍ</td>
		<td colspan="4" class="b">ꙣ</td>
		<td colspan="4" class="b">в</td>
		<td colspan="4" class="b">ԣ</td>
		<td colspan="4" class="b">ч</td>
		<td colspan="4" class="b">н</td>
		<td colspan="4" class="b">м</td>
		<td colspan="4" class="b">ь</td>
		<td colspan="4" class="b">⁝</td>
		<td colspan="4" class="b">?</td>
		<td colspan="11" class="b m">shift</td>
	</tr>
	<tr class="mac hidden">
		<td colspan="6" class="t m"></td>
		<td colspan="5" class="t m"></td>
		<td colspan="6" class="t m"></td>
		<td colspan="26" class="t">space</td>
		<td colspan="6" class="t m"></td>
		<td colspan="5" class="t m"></td>
		<td colspan="6" class="t m"></td>
	</tr>
	<tr class="mac hidden">
		<td colspan="6" class="b m">control</td>
		<td colspan="5" class="b m">option</td>
		<td colspan="6" class="b m">command</td>
		<td colspan="26" class="b">·</td>
		<td colspan="6" class="b m">command</td>
		<td colspan="5" class="b m">option</td>
		<td colspan="6" class="b m">control</td>
	</tr>
	<tr class="other hidden">
		<td colspan="6" class="t m"></td>
		<td colspan="5" class="t m"></td>
		<td colspan="5" class="t m"></td>
		<td colspan="23" class="t">space</td>
		<td colspan="5" class="t m"></td>
		<td colspan="5" class="t m"></td>
		<td colspan="5" class="t m"></td>
		<td colspan="6" class="t m"></td>
	</tr>
	<tr class="other hidden">
		<td colspan="6" class="b m">ctrl</td>
		<td colspan="5" class="b m">❖</td>
		<td colspan="5" class="b m">alt</td>
		<td colspan="23" class="b">·</td>
		<td colspan="5" class="b m">alt gr</td>
		<td colspan="5" class="b m">❖</td>
		<td colspan="5" class="b m">▤</td>
		<td colspan="6" class="b m">ctrl</td>
	</tr>
</table>
<script>
	function prep() {
		var ua = navigator.userAgent || navigator.appVersion;
		var mac = (ua.indexOf('Macintosh') >= 0) || (ua.indexOf('Mac OS') >= 0) || (ua.indexOf('MacOS') >= 0);
		var os = (mac ? 'mac' : 'other');
		var e = document.getElementsByClassName(os);
		for (var i = 0; i < e.length; i++) {
			e[i].className = e[i].className.replace('hidden', '');
		}
	}
	prep();
</script>