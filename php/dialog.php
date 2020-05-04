<?php
include("sqlConnect.php");
$result=mysqli_query($conn,"SELECT * from question");
while($row=mysqli_fetch_object($result)){
    echo "      <li style='list-style-type: none;margin:0;padding:0;position:relative'>
                    <div style='width:760px;margin:0;padding:0;position:relative'>
                        <div style='width:100px;height:40px;position:relative;margin:0;padding:0'>
                        $row->user:
                          <p style='font-size:8px;margin:0;padding:0'>$row->q_time</p>
                        </div>
                        <div style='position:absolute;left:100px;top:0px;margin:0;padding:0'>
                            <div style='width:auto;height:auto;border:1px solid rgb(98, 100, 100);background-color:rgb(86, 201, 216);
                              word-wrap: break-word;word-break: break-all;margin:0;padding:0;border-radius:10px;color:white;line-height:30px'>
                               $row->q_text
                            </div>
                         </div>          
                    </div>
                </li>
        ";
}
?>