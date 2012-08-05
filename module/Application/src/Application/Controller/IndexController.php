<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractActionController
{
    
    /*
     * The basic data to be responded, defined as array
     * 
     * BBC One London schedule for the 21st and 22nd July 2012
     * http://www.bbc.co.uk/bbcone/programmes/schedules/london/2012/07/21
     * http://www.bbc.co.uk/bbcone/programmes/schedules/london/2012/07/22
     */ 
    public $data = array(
        'today' => array(
            'date' => '2012-07-21',
            'link' => 'http://www.bbc.co.uk/bbcone/programmes/schedules/london/2012/07/21',
            'early' => array(
                '00:00' => array(
                    'title' => 'EastEnders Omnibus',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l05m4',
                ),
                '01:25' => array(
                    'title' => 'Weatherview',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01kx1fs',
                ),
                '01:30' => array(
                    'title' => 'Britain\'s Lost Routes with Griff Rhys Jones',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01jrlv2',
                ),
                '02:30' => array(
                    'title' => 'Hairy Bikers\' Best of British',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b018wbf8',
                ),
                '03:15' => array(
                    'title' => 'Great British Menu',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/b01jv7jp',
                ),
                '04:15' => array(
                    'title' => 'Joins BBC News',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01kx1fv',
                ),
            ),
            'morning' => array(
                '06:00' => array(
                    'title' => 'Breakfast',
                    'subtitle' => '21/07/2012',
                    'description' => 'The latest news, sport, business and weather from the BBC\'s Breakfast team.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g4b',
                ),
                '10:00' => array(
                    'title' => 'Golf: The Open',
                    'subtitle' => '2012, Day 3 Part 1',
                    'description' => 'Hazel Irvine presents live coverage of the third round of the Open Championship.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l8mrg',
                ),
            ),
            'afternoon' => array(
                '12:00' => array(
                    'title' => 'BBC Weekend News',
                    'subtitle' => '21/07/2012',
                    'description' => 'National and international news from the BBC.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g4d',
                ),
                '12:05' => array(
                    'title' => 'BBC London News',
                    'subtitle' => '21/07/2012',
                    'description' => 'The latest news, sport and weather from London.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01kw80g',
                ),
                '12:10' => array(
                    'title' => 'Golf: The Open',
                    'subtitle' => '2012, Day 3 Part 2',
                    'description' => 'Hazel Irvine presents live coverage of the third round of the Open Championship.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l7tk3',
                ),
            ),
            'evening' => array(
                '18:10' => array(
                    'title' => 'BBC Weekend News',
                    'subtitle' => '21/07/2012',
                    'description' => 'National and international news from the BBC.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g4j',
                ),
                '18:20' => array(
                    'title' => 'BBC London News',
                    'subtitle' => '21/07/2012',
                    'description' => 'The latest news, sport and weather from London.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01kw80j',
                ),
                '18:30' => array(
                    'title' => 'Indiana Jones and the Last Crusade',
                    'subtitle' => '',
                    'description' => 'Action adventure. The explorer sets out to rescue his father, lost seeking the Holy Grail.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b007bgk3',
                ),
                '20:25' => array(
                    'title' => 'The National Lottery: Secret Fortune',
                    'subtitle' => 'Series 3, Episode 3',
                    'description' => '3/12 Flat-mates Holly and Laura play to win enough to get them on the property ladder.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01lb5cv',
                ),
                '21:20' => array(
                    'title' => 'Casualty',
                    'subtitle' => 'Series 26, #HolbyRiot - Part 1',
                    'description' => '41/42 A man dies unexpectedly after being stunned by the police in his home.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l0d7y',
                ),
                '22:10' => array(
                    'title' => 'BBC Weekend News',
                    'subtitle' => '21/07/2012',
                    'description' => 'National and international news from the BBC.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g4n',
                ),
                '22:30' => array(
                    'title' => 'Mrs Brown\'s Boys',
                    'subtitle' => 'Series 1, Mammy\'s Miracle',
                    'description' => '6/6 Father Quinn loses his faith, while Grandad decides he wants to witness his own funeral.',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/b00zx8j9',
                ),
                '23:00' => array(
                    'title' => 'Live at the Apollo',
                    'subtitle' => 'Series 7, Episode 1',
                    'description' => '1/8 Micky Flanagan introduces rising stars Seann Walsh, and Irish favourite Jason Byrne.',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/b016z0nb',
                ),
                '23:45' => array(
                    'title' => 'Grosse Pointe Blank',
                    'subtitle' => '',
                    'description' => 'A hitman returns to his home town to murder someone and attend his school reunion.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b00d4l69',
                ),
            ),
        ),
        'tomorrow' => array(
            'date' => '2012-07-22',
            'link' => 'http://www.bbc.co.uk/bbcone/programmes/schedules/london/2012/07/22',
            'early' => array(
                '01:25' => array(
                    'title' => 'Weatherview',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g4q',
                ),
                '01:30' => array(
                    'title' => 'Faster, Higher, Stronger',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/p00v9bs8',
                ),
                '02:30' => array(
                    'title' => 'Usain Bolt: The Fastest Man Alive',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l1xyh',
                ),
                '03:30' => array(
                    'title' => 'Joins BBC News',
                    'subtitle' => '',
                    'description' => '',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g4s',
                ),
            ),
            'morning' => array(
                '06:00' => array(
                    'title' => 'Breakfast',
                    'subtitle' => '22/07/2012',
                    'description' => 'The latest news, sport, business and weather from the BBC\'s Breakfast team.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g5m',
                ),
                '09:00' => array(
                    'title' => 'The Andrew Marr Show',
                    'subtitle' => '22/07/2012',
                    'description' => 'Andrew Marr\'s guests are Boris Johnson, Louis Susman, Daniel Barenboim, and Rumer.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01lb48m',
                ),
                '10:00' => array(
                    'title' => 'Sunday Morning Live',
                    'subtitle' => 'Series 3, Episode 7',
                    'description' => '7/18 Should we take children away from problem families? With Samira Ahmed.',
                    'link' => 'http://www.bbc.co.uk/programmes/b01l9ndn',
                ),
                '11:00' => array(
                    'title' => 'Country Tracks',
                    'subtitle' => 'South Down',
                    'description' => 'Ellie Harrison drives a classic car in Bexhill-on-Sea.',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/b00n6vlh',
                ),
            ),
            'afternoon' => array(
                '12:00' => array(
                    'title' => 'BBC Weekend News',
                    'subtitle' => '22/07/2012',
                    'description' => 'National and international news from the BBC.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01lbm3b',
                ),
                '12:05' => array(
                    'title' => 'Bargain Hunt',
                    'subtitle' => 'Series 23, Norfolk 3',
                    'description' => 'Sunny Norfolk provides the venue for Tim Wonnacott\'s teams.',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/b01lcz5k',
                ),
                '12:35' => array(
                    'title' => 'Golf: The Open',
                    'subtitle' => '2012, Day 4 Part 2',
                    'description' => 'Hazel Irvine introduces live coverage as the 141st Open Championship reaches its climax.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l7tp0',
                ),
            ),
            'evening' => array(
                '19:00' => array(
                    'title' => 'BBC Weekend News',
                    'subtitle' => '22/07/2012',
                    'description' => 'The latest national and international news stories from the BBC.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g5r',
                ),
                '19:10' => array(
                    'title' => 'BBC London News',
                    'subtitle' => '22/07/2012',
                    'description' => 'The latest news, sport and weather from London.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01kw80y',
                ),
                '19:15' => array(
                    'title' => 'Countryfile',
                    'subtitle' => '22/07/2012',
                    'description' => 'In Shropshire, the team find out how the landscape has inspired people to be healthier.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01lbflk',
                ),
                '20:10' => array(
                    'title' => 'Casualty',
                    'subtitle' => 'Series 26, #HolbyRiot - Part 2',
                    'description' => ' 42/42 Jordan is forced to operate on his girlfriend as the riots block his way to the ED.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l9mgc',
                ),
                '21:00' => array(
                    'title' => 'Wallander',
                    'subtitle' => 'Series 3, Before the Frost',
                    'description' => ' 3/3 A friend of Wallander\'s daughter comes begging for his help but then disappears.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l7qv1',
                ),
                '22:30' => array(
                    'title' => 'BBC Weekend News',
                    'subtitle' => '22/07/2012',
                    'description' => 'The latest national and international news stories from the BBC.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4g5w',
                ),
                '22:45' => array(
                    'title' => 'BBC London News',
                    'subtitle' => '22/07/2012',
                    'description' => 'The latest news, sport and weather from London.',
                    'repeat' => false,
                    'link' => 'http://www.bbc.co.uk/programmes/b01kw810',
                ),
                '22:55' => array(
                    'title' => 'John Bishop\'s Britain',
                    'subtitle' => 'Series 2, Friends',
                    'description' => '5/7 Reggie Yates and Craig Revel Horwood discuss their childhood friendships.',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/b0147py5',
                ),
                '23:40' => array(
                    'title' => 'Formula 1',
                    'subtitle' => '2012, The German Grand Prix - Highlights',
                    'description' => 'Lee McKenzie introduces highlights of the German Grand Prix.',
                    'repeat' => true,
                    'link' => 'http://www.bbc.co.uk/programmes/b01l4htp',
                ),
            ),
        ),
    );

/*******************
 ****** JSON *******
 *******************/
    
    private function jsonResponse(array $data = array())
    {
        // create JSON View Model and return it to be responded as JSON
        return new JsonModel($data);
    }
    
    /*
     * BBC One full schedule today and tomorrow, 2012-07-21 and 2012-07-22
     * JSON response action
     */
    public function scheduleBbcOneJsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data);
    }
    
    /*
     * BBC One full schedule today, 2012-07-21
     * JSON response action
     */
    public function scheduleBbcOne20120721JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['today']);
    }
    
    /*
     * BBC One full schedule tomorrow, 2012-07-22
     * JSON response action
     */
    public function scheduleBbcOne20120722JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['tomorrow']);
    }
    
    /*
     * BBC One schedule early today, 2012-07-21
     * JSON response action
     */
    public function scheduleBbcOneEarly20120721JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['today']['early']);
    }
    
    /*
     * BBC One schedule morning today, 2012-07-21
     * JSON response action
     */
    public function scheduleBbcOneMorning20120721JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['today']['morning']);
    }
    
    /*
     * BBC One schedule afternoon today, 2012-07-21
     * JSON response action
     */
    public function scheduleBbcOneAfternoon20120721JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['today']['afternoon']);
    }
    
    /*
     * BBC One schedule evening today, 2012-07-21
     * JSON response action
     */
    public function scheduleBbcOneEvening20120721JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['today']['evening']);
    }
    
    /*
     * BBC One schedule early tomorrow, 2012-07-22
     * JSON response action
     */
    public function scheduleBbcOneEarly20120722JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['tomorrow']['early']);
    }
    
    /*
     * BBC One schedule morning tomorrow, 2012-07-22
     * JSON response action
     */
    public function scheduleBbcOneMorning20120722JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['tomorrow']['morning']);
    }
    
    /*
     * BBC One schedule afternoon tomorrow, 2012-07-22
     * JSON response action
     */
    public function scheduleBbcOneAfternoon20120722JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['tomorrow']['afternoon']);
    }
    
    /*
     * BBC One schedule evening tomorrow, 2012-07-22
     * JSON response action
     */
    public function scheduleBbcOneEvening20120722JsonAction()
    {
        // return JsonModel to be responded as JSON
        return $this->jsonResponse($this->data['tomorrow']['evening']);
    }

/*******************
 ******* XML *******
 *******************/
    
    private function xmlResponse(array $data = array())
    {
        // create View Model with XML data
        $view = new ViewModel(array(
            'doctype' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>',
            'data' => $data,
            'broadcast_timeslots' => array(
                'early',
                'morning',
                'afternoon',
                'evening',
            ),
        ));
        
        // add content-type HTTP response header to identify the response as XML
        $response = $this->getResponse();
        $headers = $response->getHeaders();
        $headers->addHeaderLine('content-type', 'application/xml');
        
        // disable layout rendering and set XML template
        $view->setTerminal(true);
        $view->setTemplate('xml');
        
        // return the View Model
        return $view;
    }
    
    /*
     * BBC One full schedule today and tomorrow, 2012-07-21 and 2012-07-22
     * XML response action
     */
    public function scheduleBbcOneXmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse($this->data);
    }
    
    /*
     * BBC One full schedule today, 2012-07-21
     * XML response action
     */
    public function scheduleBbcOne20120721XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('today' => $this->data['today']));
    }
    
    /*
     * BBC One full schedule tomorrow, 2012-07-22
     * XML response action
     */
    public function scheduleBbcOne20120722XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('tomorrow' => $this->data['tomorrow']));
    }
    
    /*
     * BBC One schedule early today, 2012-07-21
     * XML response action
     */
    public function scheduleBbcOneEarly20120721XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('today' => array(
                'date' => $this->data['today']['date'],
                'link' => $this->data['today']['link'],
                'early' => $this->data['today']['early'])));
    }
    
    /*
     * BBC One schedule morning today, 2012-07-21
     * XML response action
     */
    public function scheduleBbcOneMorning20120721XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('today' => array(
                'date' => $this->data['today']['date'],
                'link' => $this->data['today']['link'],
                'morning' => $this->data['today']['morning'])));
    }
    
    /*
     * BBC One schedule afternoon today, 2012-07-21
     * XML response action
     */
    public function scheduleBbcOneAfternoon20120721XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('today' => array(
                'date' => $this->data['today']['date'],
                'link' => $this->data['today']['link'],
                'afternoon' => $this->data['today']['afternoon'])));
    }
    
    /*
     * BBC One schedule evening today, 2012-07-21
     * XML response action
     */
    public function scheduleBbcOneEvening20120721XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('today' => array(
                'date' => $this->data['today']['date'],
                'link' => $this->data['today']['link'],
                'evening' => $this->data['today']['evening'])));
    }
    
    /*
     * BBC One schedule early tomorrow, 2012-07-22
     * XML response action
     */
    public function scheduleBbcOneEarly20120722XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('tomorrow' => array(
                'date' => $this->data['tomorrow']['date'],
                'link' => $this->data['tomorrow']['link'],
                'early' => $this->data['tomorrow']['early'])));
    }
    
    /*
     * BBC One schedule morning tomorrow, 2012-07-22
     * XML response action
     */
    public function scheduleBbcOneMorning20120722XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('tomorrow' => array(
                'date' => $this->data['tomorrow']['date'],
                'link' => $this->data['tomorrow']['link'],
                'morning' => $this->data['tomorrow']['morning'])));
    }
    
    /*
     * BBC One schedule afternoon tomorrow, 2012-07-22
     * XML response action
     */
    public function scheduleBbcOneAfternoon20120722XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('tomorrow' => array(
                'date' => $this->data['tomorrow']['date'],
                'link' => $this->data['tomorrow']['link'],
                'afternoon' => $this->data['tomorrow']['afternoon'])));
    }
    
    /*
     * BBC One schedule evening tomorrow, 2012-07-22
     * XML response action
     */
    public function scheduleBbcOneEvening20120722XmlAction()
    {
        // return ViewModel to be rendered in the appropriate XML view template
        return $this->xmlResponse(array('tomorrow' => array(
                'date' => $this->data['tomorrow']['date'],
                'link' => $this->data['tomorrow']['link'],
                'evening' => $this->data['tomorrow']['evening'])));
    }
    
/*******************
 ****** XHTML ******
 *******************/
    
    private function xhtmlResponse(array $data = array())
    {
        // create View Model with data for XHTML document
        $view = new ViewModel(array(
            'data' => $data,
            'broadcast_timeslots' => array(
                'early',
                'morning',
                'afternoon',
                'evening',
            ),
        ));
        
        // set XHTML template
        $view->setTemplate('xhtml');
        
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $view;
    }
    
    /*
     * BBC One full schedule today and tomorrow, 2012-07-21 and 2012-07-22
     * XHTML response action
     */
    public function scheduleBbcOneXhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse($this->data);
    }
    
    /*
     * BBC One full schedule today, 2012-07-21
     * XHTML response action
     */
    public function scheduleBbcOne20120721XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('today' => $this->data['today']));
    }
    
    /*
     * BBC One full schedule tomorrow, 2012-07-22
     * XHTML response action
     */
    public function scheduleBbcOne20120722XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('tomorrow' => $this->data['tomorrow']));
    }
    
    /*
     * BBC One schedule early today, 2012-07-21
     * XHTML response action
     */
    public function scheduleBbcOneEarly20120721XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('today' => array(
                'date' => $this->data['today']['date'],
                'link' => $this->data['today']['link'],
                'early' => $this->data['today']['early'])));
    }
    
    /*
     * BBC One schedule morning today, 2012-07-21
     * XHTML response action
     */
    public function scheduleBbcOneMorning20120721XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('today' => array(
                'date' => $this->data['today']['date'],
                'link' => $this->data['today']['link'],
                'morning' => $this->data['today']['morning'])));
    }
    
    /*
     * BBC One schedule afternoon today, 2012-07-21
     * XHTML response action
     */
    public function scheduleBbcOneAfternoon20120721XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('today' => array(
                'date' => $this->data['today']['date'],
                'link' => $this->data['today']['link'],
                'afternoon' => $this->data['today']['afternoon'])));
    }
    
    /*
     * BBC One schedule evening today, 2012-07-21
     * XHTML response action
     */
    public function scheduleBbcOneEvening20120721XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('today' => array(
                'date' => $this->data['today']['date'],
                'link' => $this->data['today']['link'],
                'evening' => $this->data['today']['evening'])));
    }
    
    /*
     * BBC One schedule early tomorrow, 2012-07-22
     * XHTML response action
     */
    public function scheduleBbcOneEarly20120722XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('tomorrow' => array(
                'date' => $this->data['tomorrow']['date'],
                'link' => $this->data['tomorrow']['link'],
                'early' => $this->data['tomorrow']['early'])));
    }
    
    /*
     * BBC One schedule morning tomorrow, 2012-07-22
     * XHTML response action
     */
    public function scheduleBbcOneMorning20120722XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('tomorrow' => array(
                'date' => $this->data['tomorrow']['date'],
                'link' => $this->data['tomorrow']['link'],
                'morning' => $this->data['tomorrow']['morning'])));
    }
    
    /*
     * BBC One schedule afternoon tomorrow, 2012-07-22
     * XHTML response action
     */
    public function scheduleBbcOneAfternoon20120722XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('tomorrow' => array(
                'date' => $this->data['tomorrow']['date'],
                'link' => $this->data['tomorrow']['link'],
                'afternoon' => $this->data['tomorrow']['afternoon'])));
    }
    
    /*
     * BBC One schedule evening tomorrow, 2012-07-22
     * XHTML response action
     */
    public function scheduleBbcOneEvening20120722XhtmlAction()
    {
        // return ViewModel to be rendered in the appropriate XHTML view template
        return $this->xhtmlResponse(array('tomorrow' => array(
                'date' => $this->data['tomorrow']['date'],
                'link' => $this->data['tomorrow']['link'],
                'evening' => $this->data['tomorrow']['evening'])));
    }
}
