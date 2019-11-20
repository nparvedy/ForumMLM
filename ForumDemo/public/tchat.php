 <?php include_once ('config.php'); ?>

<?php
// on récupère les 10 derniers messages postés  
        $request = $bdd->query('SELECT * FROM section');
        $request->fetch();?>
<a id="tchat_li" href="?id=9" class="tchat1"><h3>Général</h3></a>
   <?php
$var = 0;

foreach($request as $sections){
    $var++ ?>
<a id="tchat_li<?php echo $var;?>" class="tchat1" href="?id=<?php echo "".$sections['id']?>"><h3><?php echo "".$sections['name']?></h3></a><?php
}
