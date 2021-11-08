import React from 'react';

function LoadingMenu() {
  return <div className='text-center'>
    <h5>Loading Menu...</h5>
    <div className='spinner-border text-dark' role='status'>
      <span className='visually-hidden'>Loading...</span>
    </div>
  </div>
}

export default LoadingMenu;
