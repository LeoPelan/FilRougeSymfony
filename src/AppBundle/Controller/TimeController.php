<?php

    namespace AppBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class TimeController extends Controller
    {
        public function currentTimeAction()
        {
            $time = date("d M Y H:i:s");
            return new Response($time);
        }

        public function squareAction($number)
        {
            $calculator = $this->get('calculator');
            return new Response($calculator->square($number));
        }
    }
