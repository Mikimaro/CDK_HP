<?php
    
    /**
     *　ProgressManager
     *　
     */
    class ProgressManager {
        
        function addProgress($userId, $questionId, $dbh){
            $sql = "UPDATE training_sheet SET {$questionId} = now() where user_id = ?";
  		    $stmt = $dbh->prepare($sql);		
			$result = $stmt->execute(array($userId)); 
            return true;  
        }

        function removeProgress($userId, $questionId, $dbh){
            $sql = "UPDATE training_sheet SET {$questionId} = now() where user_id = ?";
  		    $stmt = $dbh->prepare($sql);		
			$result = $stmt->execute(array($userId));

            return true;
        }

        function showProgress($userId, $dbh){
            $sql = "SELECT * from training_sheet where user_id = ?";
            $stmt = $dbh -> prepare($sql);
            $stmt->execute(array($userId));
            $result = $stmt->fetchAll();            

            return $result;

        }

    }
    