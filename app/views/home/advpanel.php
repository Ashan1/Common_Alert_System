<div class="panel col-lg-12">
    <div >
        <div class="col-lg-4 panel-photo">
            <img src="images/pro-pic.png">
        </div>
        <div class="col-lg-8">
            <ul><?php echo
                "<li>Name: {$row[E_name]}</li>
             <li>Title: {$row[role]}</li>
             <li >Email: {$row[email]}</li>
             <li>Mobile: {$row[tel]}</li>
             <li><br>Responsible Areas: </li>";
                ?>
            </ul>
            </table>
        </div>
    </div>
</div>
