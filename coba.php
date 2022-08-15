
                          <?php
                       require'function.php';

                          $total=0;
                       

                          
                          $query = mysqli_query($conn, "SELECT `Subtotal` FROM `pembelian` GROUP BY `Subtotal` ASC");

                          $result = mysqli_fetch_array($query);

                           $i=1;
                          
                          foreach($query as $row )
                          {
                         
                         
                          $id = $row['ID_Pembelian'];
                          $tanggal =$row['Tanggal_Pembelian'];
                          $nama =   $row['Nama'];
                          $harga =  $row['Harga'];
                          $jumlah = $row['Jumlah'];
                          $subtotal = count($row['Subtotal']);
                          (int)$total +=(int)($row['Subtotal']);
                          
                               
                          
                          
                          ?>

                          <tbody>
                        
                        <tr>
                        

                        <td >
                        <?php echo $i++; ?>
                        </td>
                        <td>
                        <?php echo $tanggal; ?>
                        </td>
                        <td>
                        <?php echo $nama; ?>
                        </td>
                        <td>
                         <?php echo $harga;  ?>
                        </td>
                        <td>
                         <?php echo $jumlah;?>
                        </td>
                        <td class="text-justify">
                         <?php echo $subtotal; ?>
                         
                         </td>

                         <td >
                         <?php $total; ?>
                         
                         </td>


                         <td> <a   class="btn btn-primary btn-round" href="hapus.php?id=<?php echo $id ;?>"  
                             style="letter-spacing: 2px; font-family: sans-serif;"?>Hapus</a>

                        </td>

                        
                        
                     

                        
                        
                         <?php   unset($_SESSION['cart']); ?>
                        
                        
                         
                      </tr>
                      <?php ; } ?> 