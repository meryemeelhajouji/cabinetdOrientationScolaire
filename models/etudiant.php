<?php
class etudiant{
    
    static public function getAlletudiant(){
        $stmt = Db::connect()->prepare('SELECT * FROM `utilisateur` WHERE role="etudiant"' );
        $stmt->execute();
        return $stmt->fetchAll();
      
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `utilisateur`(nom,email,password,role) VALUES (:nom,:email,:password,:role)');
        $stmt->bindParam(':nom',   $data['nom']);
        $stmt->bindParam(':email',  $data['email']);
        $stmt->bindParam(':password',    $data['password']);
        $stmt->bindParam(':role',  $data['role']); 
        if($stmt->execute()){
            return 'User is created successfully';
          }
          else{
            return 'User was not created successfully';
          }
        
          $stmt = null;
    }

    static public function deleteEtudiant($data){
      $id= $data; 
      try{
        
          $query = 'DELETE FROM `utilisateur` WHERE id_user = :id ';
          $stmt = DB::connect()->prepare($query);
          $stmt->execute(array(':id' => $id));
          if($stmt->execute()){
              return 'ok';
          }else{
            echo"error";
          }
      }catch(PDOException $ex){
          echo 'erreur' . $ex->getMessage();
      }
    }

    static public function getOne($data){
      $id = $data['id'];
      try{
          $query = 'SELECT * FROM `utilisateur` WHERE id_user=:id';
          $stmt = DB::connect()->prepare($query);
          $stmt->execute(array(':id' => $id));
          $admin = $stmt->fetch(PDO::FETCH_ASSOC);
          return $admin;

      }catch(PDOException $ex){
          echo 'erreur' . $ex->getMessage();
      }
    }

    static public function update($data){
        $stmt = DB::connect()->prepare(' UPDATE utilisateur  SET nom = :nom , prenom = :prenom , tele = :tele , adresse = :adresse  WHERE id_user = :id');
        $stmt->bindParam(':nom',   $data['nom']);
        $stmt->bindParam(':prenom',  $data['prenom']);
        $stmt->bindParam(':tele',  $data['tele']);
        $stmt->bindParam(':adresse',    $data['adresse']); 
          $stmt->bindParam(':id', $data['id']);
          
          if($stmt->execute()){
            return 'ok';
          }
          else{
            return 'No';
          }
    } 


    static public function getCountEtudiant(){
      $stmt = Db::connect()->prepare('SELECT count(*) as etu FROM `utilisateur` WHERE role="etudiant"' );
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    
  }
}?>