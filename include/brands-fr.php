<?php

include 'connect.php';

// On envois la requète
$sql = $pdo->query("SELECT * FROM marques WHERE display = 1 AND nomImage != ''");
$sql->setFetchMode(PDO::FETCH_OBJ);


while( $value = $sql->fetch() ){ ?>
<div id='<?php echo $value->Marque; ?>' class="svg mix three columns <?php if ($value->FribourgWomen){echo "fribourgwoman";}?> <?php if ($value->FribourgMen){echo "fribourgman";}?> <?php if ($value->AvryWomen){echo "avrywoman";}?> <?php if ($value->AvryMen){echo "avryman";}?> <?php if ($value->BulleWomen){echo "bullewoman";}?> <?php if ($value->PremiumBrands){echo "premiumbrands";}?>">

  <img src="img/brands/<?php echo $value->nomImage; ?>" alt="<?php echo $value->Marque; ?>">
  <h3><?php echo $value->Marque; ?></h3>
</div>
<?php
  }
?>