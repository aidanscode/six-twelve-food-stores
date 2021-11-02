@extends('layouts.web')

@section('title','Meal Builder')

@section('content')
<div class="container overflow-hidden">
  <h1>Welcome to the Meal Builder!</h1>
  <div class="row mb-5">
    {{--Builder Box --}}
    <div class="col-12 col-lg-9">
      <div class="bg-secondary-light p-3">
        <div class="row g-3">
          {{--Builder Options--}}
          <div class="col-12 col-lg-9">
            <div class="builder-section-box w-100 bg-white">
              <div class="container my-3">
                <h5><u>Build Your Meal</u></h5>
                <p>
                  Ingredients Disclaimer
                  <br />
                  6-12 Food Stores has made reasonable efforts to provide ingredient information for each product based upon standard product formulations. This ingredient information may be affected by product changes, new product introductions or testing, variations in sources of supply, regional differences, and/or seasonal differences.
                </p>

                <p>
                  Nutrition Disclaimer
                  <br />
                  The nutrition information in these tables is derived from testing conducted in accredited labs, published resources, and from data provided by the suppliers who manufacture food and beverage items for 6-12 Food Stores Serving sizes may vary from those used to calculate nutrition information. The nutritional information for each product may be affected by product changes, new product introductions or testing, variations in sources of supply, regional differences, and/or seasonal differences. Data is rounded to meet current U.S. FDA NLEA guidelines.
                </p>

                <p>
                  Allergen Disclaimer
                  <br />
                  The following allergens are used or may be present in our food service area: peanuts, tree nuts, milk, soy, wheat, eggs, fish and shell fish. Customers with food allergies should be aware that 6-12 Food Stores uses the same utensils and equipment to prepare food and beverage products containing allergens as it uses to prepare food and beverages containing non-allergenic ingredients. Therefore, cross contact with allergens may occur. For more information, please click the Contact button on the top right of the page or connect with us through social media which is linked at the bottom of the page. You can also call us at (856) 225-6800.
                </p>

                <div class="text-center">
                  <button class="btn btn-dark text-center">I acknowledge, continue</button>
                </div>
              </div>
            </div>
          </div>

          {{--My Selections List--}}
          <div class="col-12 col-lg-3">
            <div class="builder-section-box w-100 bg-white">
              <div class="container">
                <h5><i class="bi bi-bag-check"></i>&nbsp;<u>My Selection</u></h5>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item border-0">Cold</li>
                  <li class="list-group-item border-0">Small (8 in.)</li>
                  <li class="list-group-item border-0">Classic Bread</li>
                  <li class="list-group-item border-0">Meatball</li>
                  <li class="list-group-item border-0">No Cheese</li>
                  <li class="list-group-item border-0">Mayo</li>
                  <li class="list-group-item border-0">Lettuce</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{--Nutritional Facts--}}
    <div class="col-12 col-lg-3">
      <table class="table table-borderless w-100 border border-dark">
        <tr class="border-bottom border-dark"><td class="py-0"><h3 class="m-0">Nutrition Facts</h3></td></tr>
        <tr><td class="py-0"><span class="fs-6">8 servings per container</span></td></tr>
        <tr class="py-0 border-bottom border-dark">
          <td class="py-0">
            <span class="fs-6 fw-bold">Serving size</span>
            <span class="fs-6 fw-bold float-end">2/3 cup (55g)</span>
          </td>
        </tr>
        <tr><td class="py-0"><span class="fs-6 fw-bold">Amount per serving</span></td></tr>
        <tr class="py-0 border-bottom border-dark">
          <td class="py-0">
            <span class="fs-4 fw-bold">Calories</span>
            <span class="fs-4 fw-bold float-end">230</span>
          </td>
        </tr>
        <tr class="border-bottom"><td class="py-0"><span class="fs-6 fw-bold float-end">% Daily Value*</span></td></tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6"><span class="fw-bold">Total Fat</span> 8g</span>
            <span class="fs-6 fw-bold float-end">10%</span>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6 ms-2">Saturated Fat 1g</span>
            <span class="fs-6 fw-bold float-end">5%</span>
          </td>
        </tr>
        <tr class="border-bottom"><td class="py-0"><span class="fs-6 ms-2">Trans Fat 0g</span></td></tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6">
              <span class="fw-bold">Cholesterol</span> 0mg
            </span>
            <span class="fs-6 fw-bold float-end">0%</span>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6">
              <span class="fw-bold">Sodium</span> 160mg
            </span>
            <span class="fs-6 fw-bold float-end">7%</span>
            </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6">
              <span class="fw-bold">Total Carbohydrate</span> 37g
            </span>
            <span class="fs-6 fw-bold float-end">13%</span>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6 ms-2">Dietary Fiber 4g</span>
            <span class="fs-6 fw-bold float-end">14%</span>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6 ms-2">Total Sugars 12g</span>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6 ms-4">Includes 10g Added Sugars</span>
            <span class="fs-6 fw-bold float-end">20%</span>
          </td>
        </tr>
        <tr class="border-bottom border-dark">
          <td class="py-0">
            <span class="fs-6">
              <span class="fw-bold">Protein</span> 3g
            </span>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6">Vitamin D 2mcg</span>
            <span class="fs-6 float-end">10%</span>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6">Calcium 260mg</span>
            <span class="fs-6 float-end">20%</span>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-0">
            <span class="fs-6">Iron 8mg</span>
            <span class="fs-6 float-end">45%</span>
          </td>
        </tr>
        <tr class="border-bottom border-dark">
          <td class="py-0">
            <span class="fs-6">Potassium 235mg</span>
            <span class="fs-6 float-end">6%</span>
          </td>
        </tr>
        <tr class="border-bottom border-dark">
          <td class="py-0">
            <span class="fs-6">
              * The % Daily Value (DV) tells you how much a nutrient in
              a serving of food contributes to a daily diet. 2,000 calories
              a day is used for general nutrition advice.
            </span>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
@endsection
