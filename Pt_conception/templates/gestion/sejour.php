{% extends 'base.html.twig' %}

{% block title %}Hello!{% endblock %}

{% block body %}

    <?php

        //namespace Models;
        use function Helpers\getDatabaseConnection;
        //use function Models\setPatient;

        
    ?>
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    <div class="example-wrapper">
        <h1>Hello infirmier! ✅</h1>

        sejour bien enregistré
    
    </div>
{% endblock %}
