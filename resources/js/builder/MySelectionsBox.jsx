import React from 'react';

function MySelectionsBox({ menuSelections }) {
  const ingredientsToList = Object.entries(menuSelections).filter(([_, ingredient]) => ingredient);

  return <div className='col-12 col-lg-3'>
    <div className='builder-section-box w-100 bg-white'>
      <div className='container'>
        <h5><i className='bi bi-bag-check'></i>&nbsp;<u>My Selections</u></h5>

        <ul className='list-group list-group-flush'>
          {ingredientsToList.map(([ingredientName, ingredient]) => {
            return <li key={ingredientName} className='list-group-item border-0'>
              {ingredient.name}
            </li>
          })}
        </ul>
      </div>
    </div>
  </div>
}

export default MySelectionsBox;
