import React from 'react';

function Complete({ restart }) {
  return <div className='text-center'>
    <h4>
      <span>
        Your meal is now complete!
        <br />
        Please confirm your selection.
      </span>
    </h4>
    <button className='btn btn-dark' onClick={restart}>Click Here to Restart</button>
  </div>
}

export default Complete;
