<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ScanCalc</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
        table { border-collapse:collapse; }
        th { background-color: #ccc; }
        th,td { padding:3px; }
        table,th,td { border: 1px solid #999; }
    </style>
</head>
<body>

<p>ScanCalc is a small JavaScript utility to convert between centimeters (cm),
    pixels and dots/inch (dpi).</p>

<script type="text/javascript">
    function cm_pixels_to_dpi() {
        if (document.scancalc.cm1.value == 0) {
            alert("cm cannot be zero");
        } else {
            document.scancalc.dp1.value = 2.54 * document.scancalc.px1.value
                    / document.scancalc.cm1.value;
        }
    }
    function pixels_dpi_to_cm() {
        if (document.scancalc.dp2.value == 0) {
            alert("dpi cannot be zero");
        } else {
            document.scancalc.cm2.value = 2.54 * document.scancalc.px2.value
                    / document.scancalc.dp2.value;
        }
    }
    function dpi_cm_to_pixels() {
        document.scancalc.px3.value = document.scancalc.dp3.value *
                document.scancalc.cm3.value / 2.54;
    }
</script>

<div align="center">
    <table>
        <tr><th>Scan Calc</th></tr>
        <tr><td>
                <form name="scancalc">
                    <table>
                        <tr>
                            <td><input name=cm1 type=text size=5>&nbsp;cm</td>
                            <td><input name=px1 type=text size=5>&nbsp;pixels</td>
                            <td><input type=button value=" * " onClick="cm_pixels_to_dpi()"></td>
                            <td><input name=dp1 type=text size=5>&nbsp;dpi</td>
                        </tr>
                        <tr>
                            <td><input name=px2 type=text size=5>&nbsp;pixels</td>
                            <td><input name=dp2 type=text size=5>&nbsp;dpi</td>
                            <td><input type=button value=" * " onClick="pixels_dpi_to_cm()"></td>
                            <td><input name=cm2 type=text size=5>&nbsp;cm</td>
                        </tr>
                        <tr>
                            <td><input name=dp3 type=text size=5>&nbsp;dpi</td>
                            <td><input name=cm3 type=text size=5>&nbsp;cm</td>
                            <td><input type=button value=" * " onClick="dpi_cm_to_pixels()"></td>
                            <td><input name=px3 type=text size=5>&nbsp;pixels</td>
                        </tr>
                    </table>
                </form>
            </td></tr>
    </table>
</div>

<p>The JavaScript and HTML code that is ScanCalc is public domain, use it
    as you wish. Either save this page, use <em>view source</em>. Even better
    <a href="https://gist.github.com/3058490" target="_blank">download it
        from github</a>.</p>

</body>
</html>