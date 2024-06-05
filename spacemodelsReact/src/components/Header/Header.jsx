import React from 'react'
import styles from './Header.module.css'
import Navbar from '../Navbar/Navbar'
import DesktopNavbar from '../DesktopNavbar/DesktopNavbar'
import Logo from '../../assets/images/Xspace.png'
import { IoCallOutline } from "react-icons/io5";



const Header = () => {
  return (
    <div className={styles.Header}>
        <div className={styles.overlay}></div> {/* Capa oscura */}
      <div className={styles.headerTop}>
        <div><Navbar/></div>
        <div><img src={Logo} width={80} alt="" /></div>
      
        <div className={styles.iconContainer}>
          <span><IoCallOutline /></span>
        </div>
      </div>
      <hr />
      <div className={styles.headerButtom}>
        <DesktopNavbar/>
      </div>
      <hr />
      <div className={styles.headerHero}>
        <div className={styles.textCointainer}>
      <h1> <span className={styles.pink} >SPACE</span> <br /> <span className={styles.blue}>MODELS </span> <br /> ENTRETENIMIENTO <br /> ADULTO</h1>
      <p>Nos encontramos en Cúcuta y representamos una compañía especializada en el ámbito del modelaje orientado al sector del entretenimiento para adultos a escala global. Nuestra misión es capacitar a modelos, dotándoles de competencias y destrezas que favorezcan el logro de un modo de vida próspero.

</p></div>
      </div>
    </div>
  )
}

export default Header
