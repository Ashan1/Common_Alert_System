<?php

require_once '../core/init.php';
require_once '../models/dbConfig.php';
include '../templates/header.php';
$db = DB::getInstance();

$query = "SELECT * FROM employee WHERE Admin_auth =0";

$users = $db->query($query);
$pduser_count = $users->count();
$pdusers = $users->result();
?>
</head>
<script src="../../public/js/pduser.js"></script>
<div>
    <div class="pending-users">
        <table class="table table_striped" id="pendinguser_table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($pduser_count>0){
                for($j=0; $j<$pduser_count; $j++) {
                    $F_name = $pdusers[$j]->F_Name;
                    $L_name = $pdusers[$j]->L_Name;
                    $space = " ";
                    $E_name = $F_name . $space . $L_name;
                    $mail = $pdusers[$j]->E_email;
                    $tel = $pdusers[$j]->E_tel;
                    $nic = $pdusers[$j]->E_nic;
                    $rol = $pdusers[$j]->E_jobrole;

                    echo
                        "<tr>
            <td>{$nic}</td>
            <td>{$E_name}</td>
            <td>{$mail}</td>
            <td>{$tel}</td>
            <td data-toggle='modal' data-target='#viewModal' id='pduview' name='pduview' type='button' data-id='$nic'>View" . "</td>
            </tr>\n";
                }
            }
            ?>
            </tbody>
        </table>
    </div>


<!--    <script type="text/javascript">
        $(document).on("click", "#pduview", function () {
            var userNIC = $(this).data('id');
            $.ajax({
                type:"POST",
                dataType: "json",
                url:'user_temp.php',
                data:{userNIC : userNIC},
                success:function(response){
                    //$('#namett').html(response[0].Tname);
                    //$("#pduname").append('<span>'+Fname+'</span>');
                   document.getElementById('pduname').innerHTML=response[0].Tname;
                    //$("#pduemail").append('<span>'+response[0].DID+'</span>');
                    //console.log(response[0].Tname);
                }
            });
        });

    </script>-->
    <div>

        <div class="modal fade" id="viewModal" role="dialog"><!--pop up modal for view-->
            <div class="modal-dialog">
                <div>
                    <div class="col-lg-10 col-lg-offset-2 model_addnew">
                        <h4 style="color:white;text-align:left;">NEW USER REQUEST</h4>
                        <form class="form-horizontal" data-toggle="validator" method="get" id="admin-adduser">
                            <input type="text" name="pdusernic" id="pdusernic">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Name:</label>
                                <label class="col-sm-4 control-label"  id="pduname"></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Email:</label>
                                <label class="col-sm-4 control-label" id="pduemail" ></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Contact Number:</label>
                                <label class="col-sm-4 control-label" id="pdumobile" ></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">NIC Number:</label>
                                <label class="col-sm-4 control-label" id="pdunic" ></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Job Title:</label>
                                <label class="col-sm-4 control-label" id="pdujb" ></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" id="pduname" >Acess Level:</label>

                                <div class="col-sm-8">
                                    <select class="form-control" id="job-role" name="job_role">
                                        <option value="General User">General User</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Operational User">Operational User</option>
                                        <option value="Executive User">Executive User</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-sm-offset-7 controls">
                                    <button type="submit" name="accept_btn"   id="pdu_accept" name="btn-acceptuser"   class="btn btn-default btn-primary">
                                        <i class="fa fa-hand-o-right"></i>&nbsp;Accept
                                    </button>
                                    <button type="submit" name="reject_btn"  type="submit" id="btn-signup" class="btn btn-default btn-primary">
                                        <i class="fa fa-hand-o-right"></i>&nbsp;Reject
                                    </button>
                                    <button type="button" name="btn-cancel" class="btn btn-default btn-primary"
                                            data-dismiss="modal" id="reset" data-dismiss="modal">
                                        <i class="fa fa-ban"></i>&nbsp;Cancel
                                    </button>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
