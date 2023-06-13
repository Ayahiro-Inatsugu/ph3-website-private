{
  const addInputButton = document.getElementById("add_input_button");

  addInputButton.addEventListener("click", addInput);

  let inputCount = 4;

  function addInput () {
    optionContainer = document.querySelector("#option_container");
    answerContainer = document.querySelector("#answer_container");

    let addOption = `
        <div class="gap-2">
          <label for="option_${inputCount}">選択肢${inputCount}</label>
          <input type="text" name="option[]" id="option_${inputCount}">
        </div>
    `;

    optionContainer.insertAdjacentHTML("beforeend", addOption);

    const addAnswer = `
      <input type="radio" name="answer" id="answer_${inputCount}" value="${inputCount}">
      <label for="answer_${inputCount}">選択肢${inputCount}</label>
    `;

    answerContainer.insertAdjacentHTML("beforeend", addAnswer);

    inputCount++;

    if (inputCount > 10) {
      addInputButton.disabled = true;
    };
  };
};
