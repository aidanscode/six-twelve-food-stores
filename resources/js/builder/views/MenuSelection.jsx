import React, { useState } from 'react';

function MenuSelection({ menu, menuSelections, setMenuSelections, done }) {
  const [menuStep, setMenuStep] = useState(0);
  const [searchString, setSearchString] = useState('');
  const menuOrder = Object.keys(menuSelections);
  const menuSectionName = menuOrder[menuStep];

  const select = ingredient => {
    setMenuSelections(currentMenuSelections => {
      let newSelections = { ...currentMenuSelections };
      newSelections[menuSectionName] = ingredient;
      return newSelections;
    });
    setSearchString('');

    if (menuStep + 1 === menuOrder.length) {
      done();
    } else {
      setMenuStep(menuStep + 1);
    }
  }

  const goBack = () => {
    setMenuStep(menuStep - 1);
  };

  const search = (e) => {
    const newSearchString = e.target.value.trim();
    setSearchString(newSearchString);
  };

  const filteredIngredients = menu[menuSectionName].filter(ingredient => {
    if (searchString.length)
      return ingredient.name.toLowerCase().includes(searchString.toLowerCase());
    else
      return true;
  }).filter(ingredient => {
    if (menuSelections['Bread Type'] && menuSelections['Bread Type'].is_flat === 1) {
      if (menuSectionName !== 'Bread Type' && Object.hasOwn(ingredient, 'is_flat'))
        return ingredient.is_flat === 1;
      else
        return 1;
    } else
      return true;
  });

  return <>
    <div className='row'>
      <div className='col-12 col-md-4'>
        {(menuStep === 0) ? null : <button className='btn btn-dark mb-2' onClick={goBack}>Back to {menuOrder[menuStep - 1]}</button>}
      </div>
      <div className='col-12 col-md-4 offset-md-4'>
        <input type='text' className='form-control' placeholder='Search' onChange={search} value={searchString} />
      </div>
    </div>

    <h5>Select a {menuSectionName}</h5>

    <div className='row mt-3'>
      {filteredIngredients.map((ingredient) => {
        return <div key={ingredient.id} onClick={() => select(ingredient)} className='col-6 col-lg-4 text-center clickable'>
          <h1><i className="bi bi-egg-fried"></i></h1>
          <h4>{ingredient.name}</h4>
        </div>
      })}
    </div>
  </>
}

export default MenuSelection;
