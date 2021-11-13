import React from 'react';

function Disclaimer({ acceptDisclaimer }) {
  return <>
    <h5><u>Builder Disclaimer</u></h5>

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
      The following allergens are used or may be present in our food service area: peanuts, tree nuts, milk, soy, wheat, eggs, fish and shell fish. Customers with food allergies should be aware that 6-12 Food Stores uses the same utensils and equipment to prepare food and beverage products containing allergens as it uses to prepare food and beverages containing non-allergenic ingredients. Therefore, cross contact with allergens may occur. For more information, please call us at (856) 225-6800.
    </p>

    <div className='text-center'>
      <button onClick={acceptDisclaimer} className='btn btn-dark text-center'>I acknowledge, continue</button>
    </div>
  </>
}

export default Disclaimer;
