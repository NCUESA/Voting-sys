function toggleCard(radio, buttonId, cardId) {

    // 重置所有卡片和按鈕樣式
    document.querySelectorAll('input[name="cardSelection"]').forEach(r => {
        const button = document.querySelector(`#${r.nextElementSibling.id}`);
        const card = document.querySelector(`#${r.nextElementSibling.id}`).parentElement.parentElement;
        console.log(card);
        if (button && card) {
            button.classList.remove('btn-primary');
            button.classList.add('btn-outline-primary');
            card.classList.remove('bg-primary', 'text-white');
        }
    });

    // 當前選中的卡片和按鈕切換為 success
    const activeButton = document.querySelector(buttonId);
    const activeCard = document.querySelector(cardId);

    if (activeButton && activeCard) {
        activeButton.classList.remove('btn-outline-primary');
        activeButton.classList.add('btn-primary');
        activeCard.classList.add('bg-primary', 'text-white');
    } else {
        console.error(`Element not found for buttonId: ${buttonId} or cardId: ${cardId}`);
    }
}


function toggleCheckbox(checkbox, buttonId, cardId) {
    // 切換卡片顏色和按鈕樣式
    const button = document.querySelector(buttonId);
    const card = document.querySelector(cardId);
    if (checkbox.checked) {
        button.classList.remove('btn-outline-primary');
        button.classList.add('btn-success');
        card.classList.add('bg-success', 'text-white');
        button.textContent = "不記名";  // 修改按鈕文字
    } else {
        button.classList.remove('btn-success');
        button.classList.add('btn-outline-primary');
        card.classList.remove('bg-success', 'text-white');
        button.textContent = "記名";  // 修改按鈕文字
    }
}