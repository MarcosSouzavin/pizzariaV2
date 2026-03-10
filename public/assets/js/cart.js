document.querySelectorAll(".add-to-cart").forEach(button => {

    button.addEventListener("click", async () => {

        const name = button.dataset.name
        const price = button.dataset.price

        const formData = new FormData()
        formData.append("name", name)
        formData.append("price", price)

        await fetch("?api=1&action=add", {
            method: "POST",
            body: formData
        })

        alert("Produto adicionado ao carrinho!")
    })

})