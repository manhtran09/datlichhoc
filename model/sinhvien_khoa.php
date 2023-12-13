                <?php
                include_once("../publish/connect.php");

                $sql="SELECT  *
                FROM sinhvien INNER JOIN lop
                on sinhvien.lop=lop.lop
                inner join khoa
                on lop.makhoa=khoa.makhoa";
                $kq=mysqli_query($conn,$sql);
                    
                    while ($row=mysqli_fetch_array($kq)) {
                         echo "<option value=".$row[''].">".$row['hoten']." - khoa: ".$row['tenkhoa']."</option>";
                    }
                ?>