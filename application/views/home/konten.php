<style type="text/css">
.title{ font-weight: bold;}
.konten{ 
    background-color: #f5f5f5; 
    border-radius: 20px 20px 20px 20px;
    height: 600px; 
    margin:auto; 
    padding: 10px; 
    width: 90%; 
    text-align: justify; 
    overflow-y: scroll;
    
}
.konten img{ 
    
}

@media only screen and (min-width:300px) and (max-width:900px){
    .konten{ width: 98%; padding:1%;
        
    }  
    
}
</style>

<?php 
error_reporting(0);

foreach($q_site as $row){ ?>
    <h3 class="text-bold title"><?php echo $row->judul; ?></h3>
    <P>
    <div class="konten">
        File Download : <a href="<?php echo base_url();?>file_upload/site/<?php echo $row->file;?>"><?php echo $row->file; ?></a>
        <article>
            <?php echo $row->konten; ?>
        </article>
    </div>
<?php
  }
?>
   
