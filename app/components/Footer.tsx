import MainTitleSection from "./MainTitleSection";

export default function Footer() {
    return (
        <footer className="bg-highlightOpacity px-4 pt-4">
            <div>
                <MainTitleSection subtitle={"Devis et"} title={"contact"} />
            </div>
            <div className="my-6">
                <h3 className="font-black text-xl">Bati&apos;Peint.</h3>
                <p><b>Tél : </b>07 70 29 84 03</p>
                <p><b>E-mail : </b>entreprise.batipeint@hotmail.com</p>
                <p><b>Adresse : </b>12 bis Chem. de la Futelaye, 27220 Mousseaux-Neuville, France</p>
            </div>
            <div>
                <h3 className="font-black mb-4">Demande de devis</h3>


                <form className="max-w-md mx-auto">

                    <div className="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_first_name" id="floating_first_name" className="block py-2.5 px-0 w-full text-sm text-black-800 bg-transparent border-0 border-b-2 border-black-800 appearance-none focus:outline-none focus:ring-0 focus:border-highlight peer" placeholder=" " required />
                        <label htmlFor="floating_first_name" className="peer-focus:font-medium absolute text-sm text-black-800 duration-300 transhtmlForm -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-highlight peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                    </div>
                    <div className="relative z-0 w-full mb-5 group">
                        <input type="email" name="floating_email" id="floating_email" className="block py-2.5 px-0 w-full text-sm text-black-800 bg-transparent border-0 border-b-2 border-black-800 appearance-none focus:outline-none focus:ring-0 focus:border-highlight peer" placeholder=" " required />
                        <label htmlFor="floating_email" className="peer-focus:font-medium absolute text-sm text-black-800 duration-300 transhtmlForm -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-highlight peer-focus:dark:text-highlight peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail</label>
                    </div>
                    <div className="relative z-0 w-full mb-5 group">
                        <input type="tel" pattern="[0-9]{10}" name="floating_phone" id="floating_phone" className="block py-2.5 px-0 w-full text-sm text-black-800 bg-transparent border-0 border-b-2 border-black-800 appearance-none focus:outline-none focus:ring-0 focus:border-highlight peer" placeholder=" " required />
                        <label htmlFor="floating_phone" className="peer-focus:font-medium absolute text-sm text-black-800  duration-300 transhtmlForm -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-highlight peer-focus:dark:text-highlight peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Téléphone (0123456789)</label>
                        <div className="relative z-0 w-full mb-5 mt-5 group">
                            <textarea
                                name="floating_message"
                                id="floating_message"
                                maxLength={250}
                                className="block py-2.5 px-0 w-full text-sm text-black-800 bg-transparent border-0 border-b-2 border-black-800 appearance-none focus:outline-none focus:ring-0 focus:border-highlight peer"
                                placeholder=" "
                                required
                            ></textarea>
                            <label
                                htmlFor="floating_message"
                                className="peer-focus:font-medium absolute text-sm text-black-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-highlight peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >
                                Message (max 250 caractères)
                            </label>
                        </div>
                    </div>
                    <button type="submit" className="text-white bg-highlight hover:bg-highlight focus:ring-4 focus:outline-none focus:ring-highlight font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Envoyer</button>
                </form>

            </div>
            <aside className="mt-4">
                <div className="flex items-center justify-center">
                    <p>&copy; Made with &nbsp;</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="size-6 text-highlight">
                        <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                    <p>&nbsp; by @dewaillyg</p>
                </div>
            </aside>
        </footer>
    )
}