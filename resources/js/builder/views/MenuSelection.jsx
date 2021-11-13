import React, { useState } from 'react';

function MenuSelection({ menu, menuSelections, setMenuSelections, done }) {
  const [menuStep, setMenuStep] = useState(0);
  const menuOrder = Object.keys(menuSelections);
  const menuSectionName = menuOrder[menuStep];

  const select = ingredient => {
    setMenuSelections(currentMenuSelections => {
      let newSelections = { ...currentMenuSelections };
      newSelections[menuSectionName] = ingredient;
      return newSelections;
    });

    if (menuStep + 1 === menuOrder.length) {
      done();
    } else {
      setMenuStep(menuStep + 1);
    }
  }

  const goBack = () => {
    setMenuStep(menuStep - 1);
  };

  return <>
    {(menuStep === 0) ? null : <button className='btn btn-dark mb-2' onClick={goBack}>Back to {menuOrder[menuStep - 1]}</button>}
    <h5>Select a {menuSectionName}</h5>

    <div className='row mt-3'>
      {menu[menuSectionName].map((ingredient) => {
        return <div key={ingredient.id} onClick={() => select(ingredient)} className='col-6 col-lg-4 text-center clickable'>
          <h1><i className="bi bi-egg-fried"></i></h1>
          <h4>{ingredient.name}</h4>
        </div>
      })}
    </div>
  </>
}

export default MenuSelection;
