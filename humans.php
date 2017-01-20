<?php /*humans.php */
	header("Content-type: text/plain");
    
    $last_update = date("m/d/Y", filemtime($_SERVER["DOCUMENT_ROOT"]));
    //$last_update = basename(__DIR__);
    
    $team = array(
        array("name" => "Patrick MacMannis", "title" => "Lead Developer/Designer", "twitter" => "@pat_macmannis", "website" => "http://www.macmannis.com/")
    );
    $tech = array(
        array("name" => "HTML5", "value" => array("MicroData (schema.org)")),
        array("name" => "CSS3", "value" => array()),
        array("name" => "JavaScript", "value" => array("Google Analytics"))
    );
    $other = array(
        array("name" => "Last Updated", "value" => $last_update),
        array("name" => "Doctype", "value" => "HTML5"),
        array("name" => "Content Type", "value" => "UTF-8"),
        array("name" => "Language", "value" => "English"),
        array("name" => "IDE", "value" => array("Notepad++", "NetBeans 7.4")),
        array("name" => "Validation", "value" => array("W3C" => "N/A")),
        array("name" => "Performance", "value" => array("YSlow (V2)" => "N/A", "YSlow (Small Site or Blog)" => "N/A", "Google PageSpeed" => "N/A", "WooRank" => "N/A", "Pingdom Time Test" => "N/A"))
    );
    function team($team) {
        foreach($team as $t) {
            $tm .= "\t" . $t['name'] . "\n";
            $tm .= "\t\t" . $t['title'] . "\n";
            $tm .= "\t\t" . $t['twitter'] . "\n";
            $tm .= "\t\t" . $t['website'] . "\n";
        }
        return $tm;
    }
    function tech($tech) {
        foreach($tech as $t) {
            $th .= "\t" . $t['name'] . "\n";
            foreach($t['value'] as $v) {
                $th .= "\t\t" . $v . "\n";
            }
        }
        return $th;
    }
    function other($other) {
        foreach($other as $o) {
            $or .= "\t" . $o['name'] . ": ";
            if(is_string($o['value'])) {
                $or .= $o['value'] . "\n";
            }
            if(is_array($o['value'])) {
                $or .= "\n";
                foreach($o['value'] as $k => $v) {
                    if(!is_numeric($k)) {
                        $or .= "\t\t" . $k . ": " . $v . "\n";
                    } else {
                        $or .= "\t\t" . $v . "\n";
                    }
                }
            }
        }
        return $or;
    }
    

    $result = "# humanstxt.org/
# The humans responsible, technology colophon & other site info
        
#TEAM
    " . team($team) . "
# TECHNOLOGY COLOPHON
    " . tech($tech) . "
# OTHER SITE INFO
    " . other($other);

	echo $result;
?>