<?php /* Template Name: Kalkulator */ ?>

<?php get_header(); ?>

<section class="section relative overflow-x-clip">
    <div class="container">
        <h1 class="font-size-36 font-size-50-lg color-primary mb-70"><?php echo get_field('calculator_header') ?></h1>
        <p class="font-size-24"><?php echo get_field('calculator_text-1') ?></p>
    </div>
    <div class="square hide-max-lg" style="right: 44px; top: 202px;"></div>
    <div class="square hide-max-lg" style="right: -44px; top: 290px;"></div>
    <div class="square hide-max-lg" style="right: 220px; top: 290px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 378px;"></div>
    <div class="square hide-max-lg" style="right: 44px; top: 466px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 554px;"></div>
</section>


<section class="section pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-30">
                <div class="calculator">
                    <h3 class="font-size-24 color-primary mb-10">Parametry sklepu</h3>
                    <p class="font-size-18 mb-117 h-min-70">Wprowadź parametry swojego sklepu, aby oszacować korzyści z wdrożenia checkoutu OpenApp</p>

                    <div class="d-flex align-items-center">
                        <label for="orders" class="font-size-18">Liczba zamówień miesięcznie</label>
                        <input type="text" class="calculator__input font-size-18" id="input-0" value="10000">
                    </div>
                  
                    <div class="form-group row" style="visibility: hidden; height: 0;">
                       <label for="staticEmail" class="col-sm-8 col-form-label"></label>
                       <div class="col-sm-4">
                          <input type="number" class="form-control-plaintext" id="input-99" value="10000">
                       </div>
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18">Średnia wartość koszyka</label>
                        <input type="text" class="calculator__input font-size-18" id="input-1" value="250">
                    </div>
                  
                    <div class="form-group row" style="visibility: hidden; height: 0;">
                      <label for="staticEmail" class="col-sm-8 col-form-label"></label>
                      <div class="col-sm-4">
                        <input type="number" class="form-control-plaintext" id="input-99" value="10000">
                      </div>
                    </div>


                    <div class="d-flex align-items-center mt-124">
                        <label for="orders" class="font-size-18">Marża brutto</label>
                        <input type="text" class="calculator__input font-size-18" id="input-2" value="30">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18">Średnia prowizja za płatność</label>
                        <input type="text" class="calculator__input font-size-18" id="input-3" value="1.15">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="calculator">
                    <h3 class="font-size-24 color-primary mb-10">Parametry OpenApp</h3>
                    <p class="font-size-18 mb-35 h-min-70">Możesz zmienić parametry OpenApp, aby zasymulować różne scenariusze</p>

                    <div class="d-flex align-items-center">
                        <label for="orders" class="font-size-18">Wzrost konwersji</label>
                        <input type="text" class="calculator__input font-size-18" id="input-7" value="20">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18 font-weight-700">Liczba zamówień po wdrożeniu</label>
                        <input disabled type="text" class="calculator__input font-size-18 font-weight-700" id="input-12" value="10232" readonly disabled>
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="orders" class="font-size-18">Wzrost wartości koszyka</label>
                        <input type="text" class="calculator__input font-size-18" id="input-8" value="0">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18 font-weight-700">Średnia wartość koszyka po wdrożeniu</label>
                        <input disabled type="text" class="calculator__input font-size-18 font-weight-700" id="input-13" value="200" readonly disabled>
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="orders" class="font-size-18">Udział transakcji OA w sprzedaży</label>
                        <input type="text" class="calculator__input font-size-18" id="input-10" value="30">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18 font-weight-700">Średnia prowizja za płatność</label>
                        <input disabled type="text" class="calculator__input font-size-18 font-weight-700" id="input-11" value="0.49" readonly disabled>
                    </div>

                    <input type="submit" class="button button--primary mt-35 margin-left-auto button-submit" value="Przelicz">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="col">
                    <div class="calculator">
                        <h3 class="font-size-24 color-primary mb-10">Wyniki szczegółowe</h3>

                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col text-align-center">
                                            Obecnie
                                        </div>
                                        <div class="col text-align-center">
                                            Po wdrożeniu OpenApp
                                        </div>
                                        <div class="col text-align-center">
                                            Zmiana
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="calculator__line"></div>

                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="cart" class="font-size-18 width-500">Wartość sprzedaży miesięcznie</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-4 text-align-center">
                                            <input disabled id="result-1" type="text" value="" class="calculator__input font-size-18 font-weight-700">
                                        </div>
                                        <div class="col-4 text-align-center">
                                            <input disabled id="result-5" type="text" value="" class="calculator__input font-size-18 font-weight-700">
                                        </div>
                                        <div class="col-4 text-align-center">
                                            <input disabled id="result-9" type="text" value="" class="calculator__input font-size-18 font-weight-700">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="calculator__line"></div>

                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="cart" class="font-size-18 width-500">Marża sklepu po koszcie płatności i transakcji (w tym OpenApp)</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-4 text-align-center">
                                            <input disabled id="result-2" type="text" value="" class="calculator__input font-size-18 font-weight-700">
                                        </div>
                                        <div class="col-4 text-align-center">
                                            <input disabled id="result-6" type="text" value="" class="calculator__input font-size-18 font-weight-700">
                                        </div>
                                        <div class="col-4 text-align-center">
                                            <input disabled id="result-10" type="text" value="" class="calculator__input font-size-18 font-weight-700">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg">
                    <h4 class="font-size-24 font-size-24-lg color-primary mb-20"><?php echo get_field('s5_header-2', 32) ?></h4>
                    <p class="font-size-18 mt-20 mb-20"><?php echo get_field('s5_text-1', 32) ?></p>
                    <p class="font-size-18 mt-20"><?php echo get_field('s5_text-2', 32) ?> <a href="<?php echo get_field('s5_help-link', 32) ?>" class="color-primary text-underline"><?php echo get_field('s5_help-link-text', 32) ?></a></p>
                </div>
            </div>
            <div class="col-lg-6 mt-70 mt-0-lg">
                <?php echo do_shortcode('[contact-form-7 id="18" title="Kontakt"]'); ?>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
  
  (function() {
    
    const selectElement = document.querySelector('.button-submit');
    
    selectElement.addEventListener('click', (event) => {
     calc();
    });
      
    calc();
      
  })();
 
  
    function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
      
    function calc() {
      
      
      const input0 = document.getElementById('input-0');
      const input1 = document.getElementById('input-1');
      const input2 = document.getElementById('input-2');
      const input3 = document.getElementById('input-3');
      //const input4 = document.getElementById('input-4');
      //const input5 = document.getElementById('input-5');
      const input6 = document.getElementById('input-6');
      const input7 = document.getElementById('input-7');
      const input8 = document.getElementById('input-8');
      //const input9 = document.getElementById('input-9');
      const input10 = document.getElementById('input-10');
      const input11 = document.getElementById('input-11');
      const input12 = document.getElementById('input-12');
      const input13 = document.getElementById('input-13');

      
      const result1 = document.getElementById('result-1');
      const result2 = document.getElementById('result-2');
      //const result3 = document.getElementById('result-3');
      const result4 = document.getElementById('result-4');
      const result5 = document.getElementById('result-5');
      const result6 = document.getElementById('result-6');
      //const result7 = document.getElementById('result-7');
      const result8 = document.getElementById('result-8');
      const result9 = document.getElementById('result-9');
      const result10 = document.getElementById('result-10');
      //const result11 = document.getElementById('result-11');
      const result12 = document.getElementById('result-12');
      const result13 = document.getElementById('result-13');
      const result14 = document.getElementById('result-14');

      const value0 = parseFloat(input0.value);
      const value1 = parseFloat(input1.value);
      const value2 = parseFloat(input2.value);
      const value3 = input3.value;
      const value4 = parseFloat(100);
      const value5 = parseFloat(0);
      let value6 = parseFloat(value4);
      const value7 = parseFloat(input7.value);
      const value8 = parseFloat(input8.value);
      const value9 = parseFloat(0);
      const value10 = parseFloat(input10.value);
      let value11 = parseFloat(input11.value);
      let value12 = parseFloat(input12.value);

      /*
      if (value7 > 20) {
         value11 = input11.value = 2.2;
      } else if (value7 <= 20 && value7 > 15) {
         value11 = input11.value = 1.8;
      } else if (value7 <= 15 && value7 > 10) {
         value11 = input11.value = 1.4;
      } else if (value7 <= 10 && value7 > 5) {
         value11 = input11.value = 1;
      } else if (value7 <= 5) {
         value11 = input11.value = 0.6;
      }
      */
       
      value6 = value0;
      
      const actualSales = parseInt((value6 * value1 * parseFloat(value4 / 100)));
      const returnsValue = parseInt(actualSales * parseFloat(value5 / 100));
      const baseMargin = parseInt(actualSales * parseFloat(value2 / 100));
      const paymentCost = parseInt(actualSales * parseFloat(value3 / 100));
      
      const cartWithOA = Math.round(value1 + (value1 * parseFloat(value8 / 100)));
  
      const OAConversion = (value4 + value4 * parseFloat(value7 / 100));
      
      const actualSalesWithOA = parseInt(parseInt(value6) * parseFloat(value10 / 100) * parseFloat(OAConversion / 100) * cartWithOA);
      
      const regularCheckoutSales = parseInt(value6 * (1 - parseFloat(value10 / 100)) * parseFloat(value4 / 100) * value1);
      
      const actualSalesWithOA2 = regularCheckoutSales + actualSalesWithOA;
      const baseMarginWithOA = actualSalesWithOA2 * (value2 / 100);
      const paymentCostWithOA = actualSalesWithOA2 * (value3 / 100);
      
      const OASales = parseInt(value6 * (parseFloat(value10 / 100)) * parseFloat(OAConversion / 100) * cartWithOA);
      
      const OARateOfReturn = parseFloat(value5 / 100) + parseFloat(value5/ 100) * parseFloat(value9 / 100);

      const returnsWithOA = OASales * parseFloat(OARateOfReturn / 100);
      
      const returnsValue2 = (actualSalesWithOA2 * (returnsWithOA / 100));
      const OAPaymentCost = parseInt(actualSalesWithOA2 * (value11 / 100));
      const regularSalesMargin = regularCheckoutSales * parseFloat(value2 / 100);
      const paymentCost2 = parseInt(regularCheckoutSales * parseFloat(value3 / 100));
      const regularSalesNetMargin = parseInt(regularSalesMargin - paymentCost2);
      const actualMargin = (actualSales - returnsValue) * parseFloat(value2 / 100);
      
      const actualMarginWithOA = (OASales - (OASales * OARateOfReturn)) * parseFloat(value2 / 100);
      
      const actualMarginWithOARegular = (regularCheckoutSales - (regularCheckoutSales * parseFloat(value5 / 100))) * parseFloat(value2 / 100);

      const r1 = actualSales;
      const r2 = baseMargin - paymentCost;
      const r3 = actualSales - returnsValue;
      const r4 = actualMargin - paymentCost;
      const r5 = regularCheckoutSales + actualSalesWithOA;
      
      const OAMargin = parseInt(OASales * parseFloat(value2 / 100));
      const paymentCheckoutCost = parseInt(OASales * parseFloat(value11 / 100));
      const OANetMargin = parseInt(OAMargin - paymentCheckoutCost);
      
      const paymentCostTotal = paymentCheckoutCost + paymentCost2;
      
      value12 = parseInt(value0 * parseFloat(OAConversion / 100));
      input12.value = numberWithCommas(parseInt(value0 + ((value12 - value0) * parseFloat(value10 / 100))));
      input13.value = cartWithOA;
      
      /*
      
      console.log('Koszyki:', value6, parseFloat(value10 / 100));
      console.log('FEE:', value11);
      console.log('actualSales:', actualSales);
      console.log('baseMargin:', baseMargin);
      console.log('returnsValue:', returnsValue);
      console.log('returnsValueCOST:', returnsValue * parseFloat(value3 / 100));
      console.log('actualSalesWithOA:', actualSalesWithOA);
      console.log('actualMargin:', actualMargin);
      console.log('returnsWithOA:', returnsWithOA);
      console.log('OARateOfReturn:', OARateOfReturn);
      console.log('actualMarginWithOA:', actualMarginWithOA);
      console.log('actualMarginWithOARegular:', actualMarginWithOARegular);
      console.log('Orders with OA:', value12);

     
      console.log('paymentCost:', paymentCost);
      console.log('regularCheckoutSales:', regularCheckoutSales);
      console.log('cartWithOA:', cartWithOA);
      console.log('OAConversion:', OAConversion);


      console.log('OASales:', OASales);
      console.log('OAMargin:', OAMargin);
      console.log('paymentCheckoutCost:', paymentCheckoutCost);
      console.log('OANetMargin:', OANetMargin);
      console.log('regularSalesMargin:', regularSalesMargin);
      console.log('paymentCost2:', paymentCost2);
      console.log('regularSalesNetMargin:', regularSalesNetMargin);
      console.log('paymentCostTotal:', paymentCostTotal);
      console.log('actualMarginWithOA:', actualMarginWithOA);
      
      */
      
      const r6 = OANetMargin + regularSalesNetMargin;

      const r7 = (regularCheckoutSales - (regularCheckoutSales * parseFloat(value5 / 100))) + (OASales - (OASales * OARateOfReturn));
      
            const r8 = actualMarginWithOARegular + actualMarginWithOA - paymentCostTotal;
      const r11 = ((((r7) * 100) / r3) - 100);
      const r12 = (((r8) * 100) / r4) - 100;
      
      result1.value = numberWithCommas(r1.toFixed(0)) + ' zł';
      result2.value = numberWithCommas((r2).toFixed(0)) + ' zł';
      //result3.innerText = numberWithCommas((r3).toFixed(0)) + ' zł';
      //result4.innerText = numberWithCommas((r4).toFixed(0)) + ' zł';
      result5.value = numberWithCommas((r5).toFixed(0)) + ' zł';
      result6.value = numberWithCommas((r6).toFixed(0)) + ' zł';
      //result7.innerText = numberWithCommas((r7).toFixed(0)) + ' zł';
      //result8.innerText = numberWithCommas((r8).toFixed(0)) + ' zł';
      
      result9.value = ((((r5) * 100) / r1) - 100).toFixed(2) + '%';
      result10.value = ((((r6) * 100) / r2) - 100).toFixed(2) + '%';
      
      //result11.innerText = r11.toFixed(2) + '%';
      //result12.innerText = r12.toFixed(2) + '%';
      
      //result13.innerText =  r11.toFixed(2) + '%';
      //result14.innerText = r12.toFixed(2) + '%';
      

      

     
   }
  
</script>

<?php get_footer(); ?>
