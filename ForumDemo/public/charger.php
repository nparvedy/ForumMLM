<?php include_once ('config.php'); ;?>

<div class="messages" >  
          <!-- les messages du tchat -->
<?php           
                if (isset($_GET['id'])){
                    $id = json_decode($_GET['id']);
                }
                if (isset($_POST['username'])) {
                    $username = $_POST['username'];
                }
              
                //On récupère les 10 derniers messages postés  
                //$requete = $bdd->query('SELECT * FROM tchat ORDER BY id DESC LIMIT 0,168');
                // $requete = $bdd->query('SELECT * FROM tchat WHERE id = "'.$id.'"');
                // $test = array_reverse($requete->fetchAll());
               
                $req = $bdd->prepare('SELECT * FROM tchat INNER JOIN user ON tchat.user_id = user.id WHERE section_id = ?');
                $req->execute(array($id));
                $data = $req->fetchAll();

                $requetee = $bdd->query('ALTER TABLE tchat AUTO_INCREMENT=0');
                $deletee = $requetee->fetch();
                echo "<li id='tchat_box'><b>[BOT]</b><font color='#D23545'> Bienvenue sur le Forum de la missions locale...</font></li>";
                
                foreach($data as $donnees){
                    echo "<li id='tchat_box'><font color='#477559' size='2px'>[".$donnees['created_at']."]</font> ".$donnees['username']." dit : "  .$donnees['message']. "</li>";
                    if ($donnees['id'] > 183) {
                        $requeted = $bdd->prepare("DELETE FROM tchat ORDER BY section_id DESC LIMIT 184");
                        $delete = $requeted->execute();
                    }
                }   
            
                $req->closeCursor();
            ?>
        </div>