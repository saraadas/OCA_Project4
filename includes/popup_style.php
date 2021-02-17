<style>
  /* Popup Open button */
  .open-button {
    color: #FFF;
    background: #0066CC;
    padding: 10px;
    text-decoration: none;
    border: 1px solid #0157ad;
    border-radius: 3px;
  }

  .open-button:hover {
    background: #01478e;
  }

  .popup {
    position: fixed;
    top: 0px;
    left: 0px;
    background: rgba(0, 0, 0, 0.75);
    width: 100%;
    height: 100%;
    display: none;
    z-index: 99999;
  }

  /* Popup inner div */
  .popup-content {
    width: 700px;
    margin: 0 auto;
    box-sizing: border-box;
    padding: 40px;
    margin-top: 100px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 1);
    border-radius: 3px;
    background: #fff;
    position: relative;
  }

  /* Popup close button */
  .close-button {
    width: 25px;
    height: 25px;
    position: absolute;
    top: -10px;
    right: -10px;
    border-radius: 20px;
    background: rgba(0, 0, 0, 0.8);
    font-size: 20px;
    text-align: center;
    color: #fff;
    text-decoration: none;
  }

  .close-button:hover {
    background: rgba(0, 0, 0, 1);
  }

  @media screen and (max-width: 720px) {
    .popup-content {
      width: 90%;
    }
  }
</style>