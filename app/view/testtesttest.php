<html>
<head>
    <title>Find table cell value on cell (table) click using JavaScript</title>
</head>
<body>
<center>
    Click on below table cell to find its value.
    <br />
    <br />
</center>
<table align="center" id="tblMain" border="1" style="cursor: pointer;">
    <tr>
        <td>
            R1C1
        </td>
        <td class="row_s">
            R1C2
        </td>
        <td>
            R1C3
        </td>
        <td>
            R1C4
        </td>
    </tr>
    <tr>
        <td>
            R2C1
        </td>
        <td>
            R2C2
        </td>
        <td>
            R2C3
        </td>
        <td>
            R2C4
        </td>
    </tr>
    <tr>
        <td>
            R3C1
        </td>
        <td>
            R3C2
        </td>
        <td>
            R3C3
        </td>
        <td>
            R3C4
        </td>
    </tr>
    <tr>
        <td>
            R4C1
        </td>
        <td>
            R4C2
        </td>
        <td>
            R4C3
        </td>
        <td>
            R4C4
        </td>
    </tr>
</table>
<br />
<script language="javascript">

    var tbl = document.getElementById("tblMain");
    if (tbl != null) {
        for (var i = 0; i < tbl.rows.length; i++) {
            for (var j = 0; j < tbl.rows[i].cells.length; j++)
                tbl.rows[i].cells[j].onclick = function () { getval(this); };
        }
    }

    function getval(cel) {
        alert(cel.innerHTML);
    }
</script>
<!--<script>
    // JavaScript script from: http://coursesweb.net/javascript/

    // gets all the .edit_row cells, registers click to each one
    var edit_row = document.querySelectorAll('#tblMain);
    for(var i=0; i<edit_row.length; i++) {
        edit_row[i].addEventListener('click', function(e){
            // get parent row, add data from its cells in form fields
            var tr_parent = this.parentNode;
            document.getElementById('e_site').value = tr_parent.querySelector('.row_s').innerHTML;
            document.getElementById('e_site').focus();
        }, false);
    }

    // to hide #edit_form when click on #cls_f button
    document.getElementById('cls_f').addEventListener('click', function(){ this.parentNode.style.display = 'none';}, false);
</script>
--></body>
</html>
 