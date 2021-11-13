import React from 'react';
import MenuUtils from './MenuUtils';

function NutritionalFactsBox({ menuSelections }) {
  const servingSize = menuSelections['Bread Type'] && menuSelections['Bread Type'].name;
  const nutrutionUnits = MenuUtils.getNutritionUnits();
  const dietAssumptions = MenuUtils.getDietAssumptions();

  const getSummation = category => {
    let sum = 0;
    Object.values(menuSelections).forEach(val => {
      if (val !== null)
        sum += val.nutrition_facts[category];
    });

    return sum;
  };

  const getFormattedSummation = category => {
    const sum = getSummation(category);

    return sum + (nutrutionUnits[category] || '');
  };

  const getDailyValuePercentage = category => {
    const summation = getSummation(category);
    const dailyValue = dietAssumptions.dailyValues[category];

    if (dailyValue === 0)
      return '';
    else {
      const percentage = Math.round(summation / dailyValue * 100);
      return percentage + '%';
    }
  };

  return <div className='col-12 col-lg-3'>
    <table className='table table-borderless w-100 border border-dark'>
      <tbody>
        <tr className='border-bottom border-dark'><td className='py-0'><h3 className='m-0'>Nutrition Facts</h3></td></tr>
        <tr className='py-0 border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-6 fw-bold'>Serving size</span>
            <span className='fs-6 fw-bold float-end'>{servingSize}</span>
          </td>
        </tr>
        <tr><td className='py-0'><span className='fs-6 fw-bold'>Amount per serving</span></td></tr>
        <tr className='py-0 border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-4 fw-bold'>Calories</span>
            <span className='fs-4 fw-bold float-end'>{getFormattedSummation('calories')}</span>
          </td>
        </tr>
        <tr className='border-bottom'><td className='py-0'><span className='fs-6 fw-bold float-end'>% Daily Value*</span></td></tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'><span className='fw-bold'>Total Fat</span> {getFormattedSummation('total_fat')}</span>
            <span className='fs-6 fw-bold float-end'>{getDailyValuePercentage('total_fat')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6 ms-2'>Saturated Fat {getFormattedSummation('saturated_fat')}</span>
            <span className='fs-6 fw-bold float-end'>{getDailyValuePercentage('saturated_fat')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6 ms-2'>Trans Fat {getFormattedSummation('trans_fat')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>
              <span className='fw-bold'>Cholesterol</span> {getFormattedSummation('cholesterol')}
            </span>
            <span className='fs-6 fw-bold float-end'>{getDailyValuePercentage('cholesterol')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>
              <span className='fw-bold'>Sodium</span> {getFormattedSummation('sodium')}
            </span>
            <span className='fs-6 fw-bold float-end'>{getDailyValuePercentage('sodium')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>
              <span className='fw-bold'>Total Carbohydrate</span> {getFormattedSummation('carbohydrates')}
            </span>
            <span className='fs-6 fw-bold float-end'>{getDailyValuePercentage('carbohydrates')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6 ms-2'>Dietary Fiber {getFormattedSummation('dietary_fiber')}</span>
            <span className='fs-6 fw-bold float-end'>{getDailyValuePercentage('dietary_fiber')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6 ms-2'>Sugars {getFormattedSummation('sugars')}</span>
          </td>
        </tr>
        <tr className='border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-6'>
              <span className='fw-bold'>Protein</span> {getFormattedSummation('protein')}
            </span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>Vitamin A</span>
            <span className='fs-6 float-end'>{getDailyValuePercentage('vitamin_a')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>Vitamin C</span>
            <span className='fs-6 float-end'>{getDailyValuePercentage('vitamin_c')}</span>
          </td>
        </tr>
        <tr className='border-bottom'>
          <td className='py-0'>
            <span className='fs-6'>Calcium</span>
            <span className='fs-6 float-end'>{getDailyValuePercentage('calcium')}</span>
          </td>
        </tr>
        <tr className='border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-6'>Iron</span>
            <span className='fs-6 float-end'>{getDailyValuePercentage('iron')}</span>
          </td>
        </tr>
        <tr className='border-bottom border-dark'>
          <td className='py-0'>
            <span className='fs-6'>
              * The % Daily Value (DV) is based on a {dietAssumptions.calorieDiet} calorie diet.
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
}

export default NutritionalFactsBox;
