# Détecteur de texte généré par ChatGPT

## Présentation
Ce projet contient des scripts PHP permettant de détecter les textes générés par ChatGPT.

## Fonctionnalités principales
- Détection des textes générés par ChatGPT.
- Analyse et évaluation des probabilités que le texte ait été généré par un modèle AI.

## Comment utiliser
1. Cloner ce dépôt à l'aide de la commande `git clone`.
2. Copiez-collez le texte à analyser dans `input.txt`.
3. Exécutez le script `checkInput.php` avec le texte à analyser en argument.
4. Le script analysera le texte et fournira une probabilité que le texte ait été généré par ChatGPT.

## Considérations de sécurité
- Soyez conscient que ce script analyse le texte entré, il est donc possible que des informations sensibles soient exposées si elles sont entrées dans le script.

## Problèmes connus
- Le script n'est pas fiable à 100%, il détecte les textes générés par ChatGPT pour un prompt peu élaboré.

## Limitations
- Ce script ne peut pas fournir une garantie à 100% que le texte a été généré par ChatGPT, il fournit seulement une estimation basée sur le modèle de détection.
- Le script peut ne pas fonctionner correctement avec des textes dans des langues autres que le français.

## Dépannage
- Si le script ne fonctionne pas comme prévu, veuillez vérifier que vous avez bien suivi les instructions d'utilisation.
- Pour toute autre question ou problème, veuillez créer un problème dans le dépôt GitHub.

## Auteur
Ce projet a été créé par Yann Rimbaud [yrimbaud](https://github.com/yrimbaud).

## Licence
Ce projet est sous licence MIT.
