<?php
namespace Modules;


class Dashboards
{
    

    public static function Globalsales()
    {
        $js = self::GrafficsJs();

        return 
                "<div class=\"col-md-4\">
                    <div class=\"card card-chart\">".$js."<div class=\"card-content\">

                            <div class=\"card-actions\">
                                <button type=\"button\" class=\"btn btn-danger btn-simple fix-broken-card\">
                                    <i class=\"material-icons\">build</i> Fix Header!
                                </button>
                                <button type=\"button\" class=\"btn btn-info btn-simple\" rel=\"tooltip\" data-placement=\"bottom\" title=\"Refresh\">
                                    <i class=\"material-icons\">refresh</i>
                                </button>
                                <button type=\"button\" class=\"btn btn-default btn-simple\" rel=\"tooltip\" data-placement=\"bottom\" title=\"Change Date\">
                                    <i class=\"material-icons\">edit</i>
                                </button>
                            </div>
                            <h4 class=\"card-title\">Website Views</h4>
                            <p class=\"category\">Last Campaign Performance</p>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"stats\">
                                <i class=\"material-icons\">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>


                    </div>
                </div>"  
        ;

    }


    public static function GrafficsJs($varJs='completedTasksChart', $color= 'rose')
    {
          return
            "
            <div class=\"card-header\" data-background-color=\" $color \" data-header-animation=\"true\">
                <div class=\"ct-chart\" id=\" $varJs \"></div>
            </div>
            ";
    }


    public static function StatusCards()
    {
        return 
        "
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"card card-stats\">
                    <div class=\"card-header\" data-background-color=\"orange\">
                        <i class=\"material-icons\">weekend</i>
                    </div>
                    <div class=\"card-content\">
                        <p class=\"category\">Bookings</p>
                        <h3 class=\"card-title\">184</h3>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"stats\">
                            <i class=\"material-icons text-danger\">warning</i>
                            <a href=\" # \">Get More Space...</a>
                        </div>
                    </div>
                </div>
            </div>
        ";

    }


    public static function maps()
    {

        $table = self::CardTable();
        return
        "
            
                <div class=\"col-md-9\">
                    <div class=\"card\">


                        <div class=\"card-header card-header-icon\" data-background-color=\"green\">
                            <i class=\"material-icons\">&#xE894;</i>
                        </div>
                            
                        ".$table."

                    </div>
                </div>
                ";

    }


    public static function CardTable()
    {   
        //$Table= self::Table();
        $jsMaps = self::JsMap();
        return
        "
            <div class=\"card-content\">
                <h4 class=\"card-title\">Global Sales by Top Locations</h4>
                <div class=\"row\">


                    <div class=\"col-md-5\">


                        <img src=\"/images/salao.jpg\" class=\"logo-img\"/>        


                        <div class=\"table-responsive table-sales\">
                            
                        ".
                        $Table
                        ."
                        </div>
                    </div>
                    ".$jsMaps."
                </div>
            </div>
        ";
    }

    public static function JsMap($varJs= "worldMap")
    {
       return
       " <div class=\"col-md-6 col-md-offset-1\">
            <div id=\"$varJs\" class=\"map\"></div>
        </div>
        ";
    }

    public Static function Table()
    {
        return"";
        /*"<table class=\"table\">
            <tbody>
                <tr>
                    <td>
                        <div class=\"flag\">
                            <img src=\"../assets/img/flags/US.png\">
                        </div>
                    </td>
                    <td>USA</td>
                    <td class=\"text-right\">
                        2.920
                    </td>
                    <td class=\"text-right\">
                        53.23%
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"flag\">
                            <img src=\"../assets/img/flags/DE.png\">
                        </div>
                    </td>
                    <td>Germany</td>
                    <td class=\"text-right\">
                        1.300
                    </td>
                    <td class=\"text-right\">
                        20.43%
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"flag\">
                            <img src=\"../assets/img/flags/AU.png\">
                        </div>
                    </td>
                    <td>Australia</td>
                    <td class=\"text-right\">
                        760
                    </td>
                    <td class=\"text-right\">
                        10.35%
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"flag\">
                            <img src=\"../assets/img/flags/GB.png\">
                        </div>
                    </td>
                    <td>United Kingdom</td>
                    <td class=\"text-right\">
                        690
                    </td>
                    <td class=\"text-right\">
                        7.87%
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"flag\">
                            <img src=\"../assets/img/flags/RO.png\">
                        </div>
                    </td>
                    <td>Romania</td>
                    <td class=\"text-right\">
                        600
                    </td>
                    <td class=\"text-right\">
                        5.94%
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"flag\">
                            <img src=\"../assets/img/flags/BR.png\">
                        </div>
                    </td>
                    <td>Brasil</td>
                    <td class=\"text-right\">
                        550
                    </td>
                    <td class=\"text-right\">
                        4.34%
                    </td>
                </tr>
            </tbody>
        </table>"*/
    }

}

?>