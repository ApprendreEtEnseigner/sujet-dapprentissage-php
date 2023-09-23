

<?php

//  $year = date('Y');
//  $hour = date('H');
//  $min = date('i');
//  $mounth = date('m');
//  $day = date('d');

//  echo "Bonjour, nous somme le ". $day.'/'. $mounth.'/'. $year. ' et il est '. $hour. ' h '. $min;

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

$sushis = [
    'title' => 'Sushis',
    'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => false,
];

function displayAutho( String $emailAuthor, array $users): String {
    for ( $i = 0 ; $i < count($users) ; $i++){
        $author = $users[$i] ;
        if ( $author['email'] == $emailAuthor){
            return $author['full_name'].' '.$author['age'].' ans';
        }
    }
}

function isValidRecipe(array $recipes) : bool {
    if (array_key_exists('is_enabled', $recipes)){
        $isEnabled = $recipes['is_enabled'];

    }else{
        $isEnabled = false;
    }

    return $isEnabled;
};

function getRecipes(array $recipes) : array
{
    $validRecipe = [];

    foreach($recipes as $element){
        if (isValidRecipe($element)){
            $validRecipe[] = $element ;
        };
    }

    return $validRecipe;
};
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes valides</title>
</head>
<body>
    <h1>Affichage des recettes valides</h1>
    <?php foreach(getRecipes($recipes) as $element) : ?>
        <article>
            <h3><?php echo($element['title']); ?></h3>
            <div><?php echo $element['recipe']; ?></div>
            <i><?php echo displayAutho($element['author'], $users) ; ?></i>
        </article>
    <?php endforeach; ?>
</body>
</html>