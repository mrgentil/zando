<?php


namespace App\Traits;


class RateableOutput
{
    public static function getRatedOutput($count)
    {
        if ($count == 0 || $count == 1) {
            return <<<HTML
                        <li class="inactive"><span class="fa fa-star"></span></li> 
                        <li class="inactive"><span class="fa fa-star"></span></li> 
                        <li class="inactive"><span class="fa fa-star"></span></li> 
                        <li class="inactive"><span class="fa fa-star"></span></li> 
                        <li class="inactive"><span class="fa fa-star"></span></li>
                    HTML;
        } elseif ($count > 1 && $count < 2) {
            return <<<HTML
                <li><span class="fa fa-star"></span></li> 
                <li class="hactive"><span class="fa fa-star"></span></li> 
                <li class="inactive"><span class="fa fa-star"></span></li> 
                <li class="inactive"><span class="fa fa-star"></span></li> 
                <li class="inactive"><span class="fa fa-star"></span></li>
            HTML;
        } elseif ($count == 2) {
            return <<<HTML
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li> 
                <li class="inactive"><span class="fa fa-star"></span></li> 
                <li class="inactive"><span class="fa fa-star"></span></li> 
                <li class="inactive"><span class="fa fa-star"></span></li>
            HTML;

        } elseif ($count > 2 && $count < 3) {
            return <<<HTML
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li> 
                <li class="hactive"><span class="fa fa-star"></span></li> 
                <li class="inactive"><span class="fa fa-star"></span></li> 
                <li class="inactive"><span class="fa fa-star"></span></li>
            HTML;
        } elseif ($count == 3) {
            return <<<HTML
                    <li><span class="fa fa-star"></span></li> 
                    <li><span class="fa fa-star"></span></li> 
                    <li><span class="fa fa-star"></span></li> 
                    <li class="inactive"><span class="fa fa-star"></span></li> 
                    <li class="inactive"><span class="fa fa-star"></span></li>
                HTML;
        } elseif ($count > 3 && $count < 4) {
            return <<<HTML
                    <li><span class="fa fa-star"></span></li> 
                    <li><span class="fa fa-star"></span></li> 
                    <li><span class="fa fa-star"></span></li> 
                    <li class="hactive"><span class="fa fa-star"></span></li> 
                    <li class="inactive"><span class="fa fa-star"></span></li>
                HTML;
        } elseif ($count == 4) {
            return <<<HTML
                    <li><span class="fa fa-star"></span></li> 
                    <li><span class="fa fa-star"></span></li> 
                    <li><span class="fa fa-star"></span></li> 
                    <li><span class="fa fa-star"></span></li> 
                    <li class="inactive"><span class="fa fa-star"></span></li>
                HTML;
        } elseif ($count > 4 && $count < 5) {
            return <<<HTML
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li> 
                <li class="hactive"><span class="fa fa-star"></span></li>
                HTML;
        } elseif ($count == 5) {
            return <<<HTML
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li> 
                <li><span class="fa fa-star"></span></li>
            HTML;
        }
        return false;
    }
}
