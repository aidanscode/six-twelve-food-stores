import React from 'react';

function NutritionalFactsBox() {
  return <div className='col-12 col-lg-3'>
    <table className='table table-borderless w-100 border border-dark'>
      <tbody>
        <tr className='border-bottom border-dark'><td className='py-0'><h3 className='m-0'>Nutrition Facts</h3></td></tr>
        <tr><td className='py-0'><span className='fs-6'>8 servings per container</span></td></tr>
        <tr className='py-0 border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-6 fw-bold'>Serving size</span>
            <span className='fs-6 fw-bold float-end'>2/3 cup (55g)</span>
          </td>
        </tr>
        <tr><td className='py-0'><span className='fs-6 fw-bold'>Amount per serving</span></td></tr>
        <tr className='py-0 border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-4 fw-bold'>Calories</span>
            <span className='fs-4 fw-bold float-end'>230</span>
          </td>
        </tr>
        <tr className='border-bottom'><td className='py-0'><span className='fs-6 fw-bold float-end'>% Daily Value*</span></td></tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'><span className='fw-bold'>Total Fat</span> 8g</span>
            <span className='fs-6 fw-bold float-end'>10%</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6 ms-2'>Saturated Fat 1g</span>
            <span className='fs-6 fw-bold float-end'>5%</span>
          </td>
        </tr>
        <tr className='border-bottom'><td className='py-0'><span className='fs-6 ms-2'>Trans Fat 0g</span></td></tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>
              <span className='fw-bold'>Cholesterol</span> 0mg
            </span>
            <span className='fs-6 fw-bold float-end'>0%</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>
              <span className='fw-bold'>Sodium</span> 160mg
            </span>
            <span className='fs-6 fw-bold float-end'>7%</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>
              <span className='fw-bold'>Total Carbohydrate</span> 37g
            </span>
            <span className='fs-6 fw-bold float-end'>13%</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6 ms-2'>Dietary Fiber 4g</span>
            <span className='fs-6 fw-bold float-end'>14%</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6 ms-2'>Total Sugars 12g</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6 ms-4'>Includes 10g Added Sugars</span>
            <span className='fs-6 fw-bold float-end'>20%</span>
          </td>
        </tr>
        <tr className='border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-6'>
              <span className='fw-bold'>Protein</span> 3g
            </span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>Vitamin D 2mcg</span>
            <span className='fs-6 float-end'>10%</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>Calcium 260mg</span>
            <span className='fs-6 float-end'>20%</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>Iron 8mg</span>
            <span className='fs-6 float-end'>45%</span>
          </td>
        </tr>
        <tr className='border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-6'>Potassium 235mg</span>
            <span className='fs-6 float-end'>6%</span>
          </td>
        </tr>
        <tr className='border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-6'>
              * The % Daily Value (DV) tells you how much a nutrient in
              a serving of food contributes to a daily diet. 2,000 calories
              a day is used for general nutrition advice.
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
}

export default NutritionalFactsBox;
