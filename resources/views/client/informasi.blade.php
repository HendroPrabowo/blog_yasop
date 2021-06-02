@extends('layouts_blog.layout')

<div class="header" style="margin-top: 50px">
<body style=" min-height: 100%;">
<div class="content" >
<style>
#myTable{
       width:70%;
       margin:0 auto;
   }
</style>

<div class="panel panel-default">
        <div class="panel-body ">
         
            <div class="row">
                <br><br>
                <div class="col-md-08">
                
                    <table id="myTable" >
                       
                        <tr>
                            
                            <td field-key='judul'>
                                <h1 style="text-align:left; font-family: fell, Georgia, Cambria, 'Times New Roman', Times, serif;">Informasi Asrama Yayasan TB Soposurung</h1>

                                <br>
                                <img   src="https://infopublik.id/assets/upload/headline//IMG-20190305-WA00021.jpg" style="max-width:100%">
                                <p style="text-align:center;color:gray;font-size: 12px"> Sumber : https://infopublik.id/ <p>
                            
                            </td>
                        </tr>
                        <tr>
                           
                            <td field-key='konten'><p style="color:black;">
                            {{$kataPembuka}}   
                            <br><br>
                            <h3 style="text-align:left; font-family: sohne, 'Helvetica Neue', Helvetica, Arial, sans-serif">Visi dan Misi</h3><br>

                            <h4> Visi </h4>
                            {{$visi}}
                            <br>

                            <h4> Misi </h4>
                            {{$misi}}

                            <br>

                            <h3 style="text-align:left; font-family: sohne, 'Helvetica Neue', Helvetica, Arial, sans-serif">Pendiri</h3><br>

                            {{$pendiri}}

                            <br>

                            <h3 style="text-align:left; font-family: sohne, 'Helvetica Neue', Helvetica, Arial, sans-serif">Sejarah</h3><br>

                            {{$sejarah}}

                            <br>

                            <h3 style="text-align:left; font-family: sohne, 'Helvetica Neue', Helvetica, Arial, sans-serif">Kontak</h3><br>

                            {{$kontak}}
                            </p></td>
                            
                        </tr>
                        
                    </table>
                </div>
            </div>
            
        </div>

             </div>
    </div>
</div>
</body>
</div>

