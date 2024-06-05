import React from 'react'
import styles from './Header.module.css'
import Navbar from '../Navbar/Navbar'
import DesktopNavbar from '../DesktopNavbar/DesktopNavbar'
import Logo from '../../assets/images/Xspace.png'
import { IoCallOutline } from "react-icons/io5";



const Header = () => {
  return (
    <div className={styles.Header}>
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
    </div>
  )
}

export default Header
