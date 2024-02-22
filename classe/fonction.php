<?php

function loadRessource($langue)
{
    global $_TEXT;

    // Prise en compte du répertoire de localisation ($_SESSION[RESS_DIR])
    $ressource_dir = __DIR__ . "/" . $langue . '/langue.res';
    if (file_exists($ressource_dir)) {
        $content = file($ressource_dir);
        $nb = count($content);
        for ($i = 0; $i < $nb; $i++) {
            $pos = strrpos("#", $content[$i]);
            if (strlen(trim($content[$i])) > 0) {
                if ($pos === false) {
                    // SRR - Ajout test sur = pour supprimer les erreurs dans le fichier log - 27/10/2006
                    $pos = strrpos($content[$i], "=");
                    if ($pos === false) null;
                    else {
                        $tab = explode("=", $content[$i]);
                        if (isset($tab[1]))
                            $_TEXT[trim($tab[0])] = trim($tab[1]);
                        else
                            $_TEXT[trim($tab[0])] = "";
                    }
                }
            }
        }
    } else {
        die(" Le fichier $ressource_dir est introuvable !");
    }
}


/**
 * Initialisation de la session
 * @access	public
 */
function _getText($key, $encode = 0)
{
    global $_TEXT;
    if (isset($_TEXT[$key])) {
        return ($_TEXT[$key]);
    }
    return "[" . ($encode == 0 ? ($key) : ($key))  . "]";
}

function debug($val = '')
{
    if (is_array($val)) {
        print('<pre>');
        print_r($val);
        print('</pre>');
    } else {
        $val .= '';
        if ($val == '') {
            print("<pre>\n");
            print_r(debug_backtrace());
            print("</pre>\n");
        } else {
            print("DEBUG : " . $val);
        }
    }
    exit();
}
