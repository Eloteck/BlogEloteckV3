<?php

class Home extends Controller
{
	public function index()
	{
		$article = $this->model('mod_Article'); //require the model
		$articles = $article->getArticlesByNumber(2);

		foreach ($articles as $key => $article) { //Date layout
			$cut_day_hour = explode(' ', $article['creation_date']);
			$day = explode('-', $cut_day_hour[0]);
			$hour = explode(':', $cut_day_hour[1]);

			$articles[$key]['creation_date'] = 'Publié le '.$day[2].'/'.$day[1].' à '.$hour[0].'h'.$hour[1];
			
			$articles[$key]['content'] = $this->truncate($articles[$key]['content'], 500);
		}

		$this->view('home', $articles);
	}

	private function truncate($texte, $nbreCar)
	{
        $LongueurTexteBrutSansHtml = strlen(strip_tags($texte));

        if($LongueurTexteBrutSansHtml < $nbreCar) return $texte;

        $MasqueHtmlSplit = '#</?([a-zA-Z1-6]+)(?: +[a-zA-Z]+="[^"]*")*( ?/)?>#';
        $MasqueHtmlMatch = '#<(?:/([a-zA-Z1-6]+)|([a-zA-Z1-6]+)(?: +[a-zA-Z]+="[^"]*")*( ?/)?)>#';

        $texte .= ' ';

        $BoutsTexte = preg_split($MasqueHtmlSplit, $texte, -1,  PREG_SPLIT_OFFSET_CAPTURE | PREG_SPLIT_NO_EMPTY);

        $NombreBouts = count($BoutsTexte);

        if( $NombreBouts == 1 )
        {
                $longueur = strlen($texte);

                return substr($texte, 0, strpos($texte, ' ', $longueur > $nbreCar ? $nbreCar : $longueur));
        }

        $longueur = 0;

        $indexDernierBout = $NombreBouts - 1;

        $position = $BoutsTexte[$indexDernierBout][1] + strlen($BoutsTexte[$indexDernierBout][0]) - 1;

        $indexBout = $indexDernierBout;
        $rechercheEspace = true;

        foreach( $BoutsTexte as $index => $bout )
        {
                $longueur += strlen($bout[0]);

                if( $longueur >= $nbreCar )
                {
                        $position_fin_bout = $bout[1] + strlen($bout[0]) - 1;

                        $position = $position_fin_bout - ($longueur - $nbreCar);

                        if( ($positionEspace = strpos($bout[0], ' ', $position - $bout[1])) !== false  )
                        {
                                $position = $bout[1] + $positionEspace;
                                $rechercheEspace = false;
                        }

                        if( $index != $indexDernierBout )
                                $indexBout = $index + 1;
                        break;
                }
        }

        if( $rechercheEspace === true )
        {
                for( $i=$indexBout; $i<=$indexDernierBout; $i++ )
                {
                        $position = $BoutsTexte[$i][1];
                        if( ($positionEspace = strpos($BoutsTexte[$i][0], ' ')) !== false )
                        {
                                $position += $positionEspace;
                                break;
                        }
                }
        }

        $texte = substr($texte, 0, $position);

        preg_match_all($MasqueHtmlMatch, $texte, $retour, PREG_OFFSET_CAPTURE);

        $BoutsTag = array();

        foreach( $retour[0] as $index => $tag )
        {
                if( isset($retour[3][$index][0]) )
                {
                        continue;
                }

                if( $retour[0][$index][0][1] != '/' )
                {
                        array_unshift($BoutsTag, $retour[2][$index][0]);
                }

                else
                {
                        array_shift($BoutsTag);
                }
        }

        if( !empty($BoutsTag) )
        {
                foreach( $BoutsTag as $tag )
                {
                        $texte .= '</' . $tag . '>';
                }
        }

        if ($LongueurTexteBrutSansHtml > $nbreCar)
        {
                $texte .= ' [......]';

                $texte =  str_replace('</p> [......]', '... </p>', $texte);
                $texte =  str_replace('</ul> [......]', '... </ul>', $texte);
                $texte =  str_replace('</div> [......]', '... </div>', $texte);
        }

        return $texte;
	}
}