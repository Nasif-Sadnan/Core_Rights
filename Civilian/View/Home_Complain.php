<html>
<head>
</head>

<body>
<form class= "Complain" id="Complain" action="../Control/complain_control.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
        
        <table>
            
            <tr>
                <td><h4> Description:</h4></td>
                <td><h4><textarea name="description" id="description" rows="5" cols="20" ></textarea></h4></td>
                <td><h4 id="descriptionerror"></h4></td>
            </tr>

            <tr>
                <td><h4> Occarance Time:</h4></td>
                <td><h4><input type="date" name="COM_Time_Occured" id="COM_Time_Occured"></h4></td>
                <td><h4 id="dateerror"></h4></td>
            </tr>

            

            

            <tr>
                <td><h4> Victim Name:</h4></td>
                <td><h4><input type="text" name="COM_Victim" id="COM_Victim"></h4></td>
                <td><h4 id="vicitmerror"></h4></td>
            </tr>

            <tr>
                <td><h4> Opponent Name:</h4></td>
                <td><h4><input type="text" name="COM_Opponent" id="COM_Opponent"></h4></td>
                <td><h4 id="opponenterror"></h4></td>
            </tr> 

            <tr>
                <td><h4> Place Of The Occurance Happend:</h4></td>
                <td><h4><textarea name="COM_Place" id="COM_Place" rows="5" cols="20" ></textarea></h4></td>
                <td><h4 id="placeerror"></h4></td>
            </tr>

            
            
            <tr>
        <td><h4>Division:</h4></td>
        <td>
            <h4>
                <select name="COM_Division" id="COM_Division">
                    <option value="none">Select Division</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rangpur">Rangpur</option>
                </select>
            </h4>
        </td>
        <td><h4 id="divisionerror"></h4></td>
        </tr>
        <tr>
        <td><h4>District:</h4></td>
        <td>
            <h4>
                <select name="COM_District" id="COM_District">
                    <option value="none">Select District</option>
                    <optgroup label="Dhaka">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Gopalganj">Gopalganj</option>
                        <option value="Kishoreganj">Kishoreganj</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Manikganj">Manikganj</option>
                        <option value="Munshiganj">Munshiganj</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Narsingdi">Narsingdi</option>
                        <option value="Rajbari">Rajbari</option>
                        <option value="Shariatpur">Shariatpur</option>
                        <option value="Tangail">Tangail</option>
                    </optgroup>
                    <optgroup label="Chattogram">
                        <option value="Brahmanbaria">Brahmanbaria</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Chandpur">Chandpur</option>
                        <option value="Lakshmipur">Lakshmipur</option>
                        <option value="Noakhali">Noakhali</option>
                        <option value="Feni">Feni</option>
                        <option value="Khagrachhari">Khagrachhari</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Cox's Bazar">Cox's Bazar</option>
                    </optgroup>
                    <optgroup label="Barishal">
                        <option value="Barishal">Barishal</option>
                        <option value="Patuakhali">Patuakhali</option>
                        <option value="Bhola">Bhola</option>
                        <option value="Pirojpur">Pirojpur</option>
                        <option value="Barguna">Barguna</option>
                        <option value="Jhalokati">Jhalokati</option>
                    </optgroup>
                    <optgroup label="Khulna">
                        <option value="Khulna">Khulna</option>
                        <option value="Bagherhat">Bagherhat</option>
                        <option value="Satkhira">Satkhira</option>
                        <option value="Jessore">Jessore</option>
                        <option value="Magura">Magura</option>
                        <option value="Jhenaidah">Jhenaidah</option>
                        <option value="Narail">Narail</option>
                        <option value="Kushtia">Kushtia</option>
                        <option value="Chuadanga">Chuadanga</option>
                        <option value="Meherpur">Meherpur</option>
                    </optgroup>
                    <optgroup label="Rajshahi">
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Chapainawabganj">Chapainawabganj</option>
                        <option value="Natore">Natore</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Sirajganj">Sirajganj</option>
                        <option value="Bogra">Bogra</option>
                        <option value="Joypurhat">Joypurhat</option>
                    </optgroup>
                    <optgroup label="Rangpur">
                        <option value="Rangpur">Rangpur</option>
                        <option value="Gaibandha">Gaibandha</option>
                        <option value="Nilphamari">Nilphamari</option>
                        <option value="Kurigram">Kurigram</option>
                        <option value="Lalmonirhat">Lalmonirhat</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Thakurgaon">Thakurgaon</option>
                        <option value="Panchagarh">Panchagarh</option>
                    </optgroup>
                    <optgroup label="Mymensingh">
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Jamalpur">Jamalpur</option>
                        <option value="Netrokona">Netrokona</option>
                        <option value="Sherpur">Sherpur</option>
                    </optgroup>
                    <optgroup label="Sylhet">
                        <option value="Habiganj">Habiganj</option>
                        <option value="Moulvibazar">Moulvibazar</option>
                        <option value="Sunamganj">Sunamganj</option>
                        <option value="Sylhet">Sylhet</option>
                    </optgroup>
                </select>
            </h4>
        </td>
        <td><h4 id="districterror"></h4></td>
        </tr>

            
           
            
            <tr>
                <td><input type="submit" id="submit"value="Register"></td>
              <td><input type="reset" id="reset" value="Reset"></td>
            </tr>

                   
        </table>
    
</form>

     
    

<script src="../JS/JS_com.js"></script>
</body>
</html>